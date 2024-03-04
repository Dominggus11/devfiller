<?php

namespace App\Exports;

use App\Models\CheklistAsSimply;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class ExportAsSimplies implements FromView
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $asSimply = CheklistAsSimply::findOrFail($this->id);
        return view('exports.as_simply', compact('asSimply'));
    }
}
