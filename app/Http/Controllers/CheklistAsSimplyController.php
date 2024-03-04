<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Area;
use App\Models\CheklistAsSimply;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheklistAsSimplyController extends Controller
{
    public function index()
    {
        $asSimplies = CheklistAsSimply::latest()->get();
        return view('Operator.AsSimplies.index', compact('asSimplies'));
    }

    public function create()
    {
        $alats = Alat::all();
        $sections = Section::all();
        $areas = Area::all();
        return view('Operator.AsSimplies.create', compact('alats', 'sections', 'areas'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();

        $this->validate($request, [
            'shift' => 'required',
            'tanggal' => 'required',
            'line' => 'required',
            'operator' => 'required'
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
            // Ambil nilai dari permintaan sesuai dengan kunci saat ini
            $data[$key] = $request->input($key);
        }

        // Tambahkan pernyataan dump() untuk melihat data sebelum validasi
        // dump($data);

        $this->validate($request, $rules);
        
        // Tambahkan pernyataan dd() untuk mengetahui apakah validasi berhasil
        // dd('Validation passed');

        // Menyimpan data
        $asSimplies = CheklistAsSimply::create(array_merge($data, [
            'shift' => $request->shift,
            'tanggal' => $request->tanggal,
            'user_id' => $user->id,
            'line' => $request->line,
            'operator' => $request->operator
        ]));

        // Tambahkan pernyataan dump() untuk melihat hasil penyimpanan
        dump($asSimplies);

        if ($asSimplies) {
            return redirect()
                ->route('Operator.AsSimplies.index')
                ->with([
                    'success' => 'New Cheklist As Simply has been created successfully'
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



    public function edit($id)
    {
        $asSimply = CheklistAsSimply::findOrFail($id);
        return view('Operator.AsSimplies.edit', compact('asSimply'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $user = Auth::user();

        $this->validate($request, [
            'shift' => 'required',
            'tanggal' => 'required',
            'line' => 'required',
            'operator' => 'required'
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
        ]));

        // dd($asSimply);
        if ($asSimply) {
            return redirect()
                ->route('Operator.AsSimplies.index')
                ->with([
                    'success' => 'Updated Cheklist As Simply has been created successfully'
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

    public function destroy($id)
    {
        $asSimply = CheklistAsSimply::findOrFail($id);
        $asSimply->delete();

        if ($asSimply) {
            return redirect()
                ->route('Operator.AsSimplies.index')
                ->with([
                    'success' => 'Cheklist As Simply has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('Operator.AsSimplies.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

}
