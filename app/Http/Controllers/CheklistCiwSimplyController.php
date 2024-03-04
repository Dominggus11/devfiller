<?php

namespace App\Http\Controllers;

use App\Models\CheklistCiwSimply;
use App\Models\SectionCiw1;
use App\Models\SectionCiw2;
use App\Models\SectionCiw3;
use App\Models\SectionCiw4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheklistCiwSimplyController extends Controller
{
    public function index()
    {
        $ciwSimplies = CheklistCiwSimply::latest()->get();
        return view('Operator.CiwSimplies.index', compact('ciwSimplies'));
    }

    public function create()
    {
        $ciw1s = SectionCiw1::all();
        $ciw2s = SectionCiw2::all();
        $ciw3s = SectionCiw3::all();
        $ciw4s = SectionCiw4::all();
        return view('Operator.CiwSimplies.create', compact('ciw1s', 'ciw2s', 'ciw3s', 'ciw4s'));
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

        $this->validate($request, $rules);

        // Menyimpan data
        $ciwSimplies = CheklistCiwSimply::create(array_merge($data, [
            'shift' => $request->shift,
            'tanggal' => $request->tanggal,
            'user_id' => $user->id,
            'line' => $request->line,
            'operator' => $request->operator
        ]));

        if ($ciwSimplies) {
            return redirect()
                ->route('Operator.CiwSimplies.index')
                ->with([
                    'success' => 'New Cheklist Ciw Simply has been created successfully'
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
        $ciwSimply = CheklistCiwSimply::findOrFail($id);
        return view('Operator.CiwSimplies.edit', compact('ciwSimply'));
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

        $this->validate($request, $rules);
        $ciwSimply = CheklistCiwSimply::findOrFail($id);
        
        $ciwSimply->update(array_merge($data, [
            'shift' => $request->shift,
            'tanggal' => $request->tanggal,
            'user_id' => $user->id,
            'line' => $request->line,
            'operator' => $request->operator
        ]));

        if ($ciwSimply) {
            return redirect()
                ->route('Operator.CiwSimplies.index')
                ->with([
                    'success' => 'Updated Cheklist Ciw Simply has been created successfully'
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
        $ciwSimply = CheklistCiwSimply::findOrFail($id);
        $ciwSimply->delete();

        if ($ciwSimply) {
            return redirect()
                ->route('Operator.CiwSimplies.index')
                ->with([
                    'success' => 'Cheklist Ciw Simply has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('Operator.CiwSimplies.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
