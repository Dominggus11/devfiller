<?php

namespace App\Http\Controllers;

use App\Exports\ExportCipSimplies;
use App\Exports\ExportCipSimpliesByDate;
use App\Models\CheklistCipSimply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminCipController extends Controller
{
    function viewCip()
    {
        $cipSimplies = CheklistCipSimply::orderBy('status', 'asc')->latest()->get();
        return view('Admin.CipSimplies.index', compact('cipSimplies'));
    }

    function approveCip($id)
    {
        $cipSimply = CheklistCipSimply::findOrFail($id);
        return view('Admin.CipSimplies.edit', compact('cipSimply'));
    }

    public function updateCip(Request $request, $id)
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

        for ($i = 1; $i <= 15; $i++) {
            $kolom[] = 'section1' . $i;
            $kolom[] = 'komponen1' . $i;
            $kolom[] = 'pelaksanaan1' . $i;
            $kolom[] = 'status_mesin1' . $i;
            $kolom[] = 'standar_waktu1' . $i;
            $kolom[] = 'waktu1' . $i;
        }

        for ($i = 1; $i <= 12; $i++) {
            $kolom[] = 'section2' . $i;
            $kolom[] = 'komponen2' . $i;
            $kolom[] = 'pelaksanaan2' . $i;
            $kolom[] = 'status_mesin2' . $i;
            $kolom[] = 'standar_waktu2' . $i;
            $kolom[] = 'waktu2' . $i;
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
        $asSimply = CheklistCipSimply::findOrFail($id);
        
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
                ->route('Admin.CipSimplies.index')
                ->with([
                    'success' => 'Approve Cheklist Cip Simply has been created successfully'
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
        return Excel::download(new ExportCipSimplies($id), 'fileCip.xlsx');
    }

    public function exportByDate(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        return (new ExportCipSimpliesByDate($startDate, $endDate))->download('cip_simplies_by_date.xlsx');
    }
}
