<?php

namespace App\Http\Controllers;

use App\Models\CheklistCipSimply;
use App\Models\SectionCip1;
use App\Models\SectionCip2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheklistCipSimplyController extends Controller
{
    public function index()
    {
        $cipSimplies = CheklistCipSimply::latest()->get();
        return view('Operator.CipSimplies.index', compact('cipSimplies'));
    }

    public function create()
    {
        $cips1 = SectionCip1::all();
        $cips2 = SectionCip2::all();
        return view('Operator.CipSimplies.create', compact('cips1', 'cips2'));
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

        $this->validate($request, $rules);

        // Menyimpan data
        $cipSimplies = CheklistCipSimply::create(array_merge($data, [
            'shift' => $request->shift,
            'tanggal' => $request->tanggal,
            'user_id' => $user->id,
            'line' => $request->line,
            'operator' => $request->operator
        ]));

        if ($cipSimplies) {
            return redirect()
                ->route('Operator.CipSimplies.index')
                ->with([
                    'success' => 'New Cheklist Cip Simply has been created successfully'
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
        $cipSimply = CheklistCipSimply::findOrFail($id);
        return view('Operator.CipSimplies.edit', compact('cipSimply'));
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

        for ($i = 1; $i <= 12; $i++) {
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
        
        
        $this->validate($request, $rules);
        $cipSimply = CheklistCipSimply::findOrFail($id);
        
        $cipSimply->update(array_merge($data, [
            'shift' => $request->shift,
            'tanggal' => $request->tanggal,
            'user_id' => $user->id,
            'line' => $request->line,
            'operator' => $request->operator
        ]));

        if ($cipSimply) {
            return redirect()
                ->route('Operator.CipSimplies.index')
                ->with([
                    'success' => 'Updated Cheklist Cip Simply has been created successfully'
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
        $cipSimply = CheklistCipSimply::findOrFail($id);
        $cipSimply->delete();

        if ($cipSimply) {
            return redirect()
                ->route('Operator.CipSimplies.index')
                ->with([
                    'success' => 'Cheklist Cip Simply has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('Operator.CipSimplies.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
