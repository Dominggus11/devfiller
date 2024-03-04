<?php

namespace App\Http\Controllers;

use App\Exports\ExportCiwSimplies;
use App\Exports\ExportCiwSimpliesByDate;
use App\Models\CheklistCiwSimply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminCiwController extends Controller
{
    function viewCiw()
    {
        $ciwSimplies = CheklistCiwSimply::orderBy('status', 'asc')->latest()->get();
        return view('Admin.CiwSimplies.index', compact('ciwSimplies'));
    }

    function approveCiw($id)
    {
        $ciwSimply = CheklistCiwSimply::findOrFail($id);
        return view('Admin.CiwSimplies.edit', compact('ciwSimply'));
    }

    public function updateCiw(Request $request, $id)
    {
        //dd($request->all());
        $user = Auth::user();

        $this->validate($request, [
            'shift' => 'required',
            'tanggal' => 'required',
            'line' => 'required',
            'operator' => 'required',
            'supervisor' => 'required'
        ]);

        $kolom = [];

        for ($i = 1; $i <= 13; $i++) {
            $kolom[] = 'section1' . $i;
            $kolom[] = 'komponen1' . $i;
            $kolom[] = 'pelaksanaan1' . $i;
            $kolom[] = 'status_mesin1' . $i;
            $kolom[] = 'standar_waktu1' . $i;
            $kolom[] = 'waktu1' . $i;
        }

        for ($i = 1; $i <= 8; $i++) {
            $kolom[] = 'section2' . $i;
            $kolom[] = 'komponen2' . $i;
            $kolom[] = 'pelaksanaan2' . $i;
            $kolom[] = 'status_mesin2' . $i;
            $kolom[] = 'standar_waktu2' . $i;
            $kolom[] = 'waktu2' . $i;
        }

        for ($i = 1; $i <= 21; $i++) {
            $kolom[] = 'section3' . $i;
            $kolom[] = 'komponen3' . $i;
            $kolom[] = 'pelaksanaan3' . $i;
            $kolom[] = 'status_mesin3' . $i;
            $kolom[] = 'standar_waktu3' . $i;
            $kolom[] = 'waktu3' . $i;
        }

        for ($i = 1; $i <= 3; $i++) {
            $kolom[] = 'section4' . $i;
            $kolom[] = 'komponen4' . $i;
            $kolom[] = 'pelaksanaan4' . $i;
            $kolom[] = 'status_mesin4' . $i;
            $kolom[] = 'standar_waktu4' . $i;
            $kolom[] = 'waktu4' . $i;
        }
        
        $rules = [];
        $data = [];

        foreach ($kolom as $key) {
            $rules[$key] = 'required';
            $data[$key] = $request->input($key);
        }
        
        // dd($data);
        $this->validate($request, $rules);
        // dd('Validation passed');
        $asSimply = CheklistCiwSimply::findOrFail($id);
        
        $asSimply->update(array_merge($data, [
            'shift' => $request->shift,
            'tanggal' => $request->tanggal,
            'user_id' => $user->id,
            'line' => $request->line,
            'operator' => $request->operator,
            'supervisor' => $request->supervisor,
            'status' => 1
        ]));

        // dd($asSimply);
        if ($asSimply) {
            return redirect()
                ->route('Admin.CiwSimplies.index')
                ->with([
                    'success' => 'Approve Cheklist Ciw Simply has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }

    }

    public function exportById($id)
    {
        return Excel::download(new ExportCiwSimplies($id), 'fileCiw.xlsx');
    }

    public function exportByDate(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        return (new ExportCiwSimpliesByDate($startDate, $endDate))->download('cip_simplies_by_date.xlsx');
    }
}
