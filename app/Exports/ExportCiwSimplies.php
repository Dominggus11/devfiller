<?php

namespace App\Exports;

use App\Models\CheklistCiwSimply;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportCiwSimplies implements FromView
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $ciwSimply = CheklistCiwSimply::findOrFail($this->id);
        return view('exports.ciw_simply', compact('ciwSimply'));
    }
}
