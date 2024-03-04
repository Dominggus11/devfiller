<?php

namespace App\Http\Controllers;

use App\Exports\ExportAsSimplies;
use App\Exports\ExportAsSimpliesByDate;
use App\Models\CheklistAsSimply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminAsController extends Controller
{
    function viewAs()
    {
        $asSimplies = CheklistAsSimply::orderBy('status', 'asc')->latest()->get();
        return view('Admin.AsSimplies.index', compact('asSimplies'));
    }

    function approveAs($id)
    {
        $asSimply = CheklistAsSimply::findOrFail($id);
        return view('Admin.AsSimplies.edit', compact('asSimply'));
    }

    public function updateAs(Request $request, $id)
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

        for ($i = 1; $i <= 18; $i++) {
            $kolom[] = 'alat' . $i;
            $kolom[] = 'posisi_tool' . $i;
            $kolom[] = 'pengecekan1' . $i;
            $kolom[] = 'standar_waktu1' . $i;
            $kolom[] = 'waktu1' . $i;
        }

        for ($i = 1; $i <= 12; $i++) {
            $kolom[] = 'section' . $i;
            $kolom[] = 'komponen' . $i;
            $kolom[] = 'pelaksanaan' . $i;
            $kolom[] = 'status_mesin1' . $i;
            $kolom[] = 'standar_waktu2' . $i;
            $kolom[] = 'waktu2' . $i;
        }

        for ($i = 1; $i <= 10; $i++) {
            $kolom[] = 'area' . $i;
            $kolom[] = 'pengecekan2' . $i;
            $kolom[] = 'status_mesin2' . $i;
            $kolom[] = 'standar_waktu3' . $i;
            $kolom[] = 'waktu3' . $i;
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
        $asSimply = CheklistAsSimply::findOrFail($id);
        
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
                ->route('Admin.AsSimplies.index')
                ->with([
                    'success' => 'Approve Cheklist As Simply has been created successfully'
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
        return Excel::download(new ExportAsSimplies($id), 'fileAs.xlsx');
    }

    public function exportByDate(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        return (new ExportAsSimpliesByDate($startDate, $endDate))->download('as_simplies_by_date.xlsx');
    }

}
