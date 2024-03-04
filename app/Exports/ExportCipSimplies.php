<?php

namespace App\Exports;

use App\Models\CheklistCipSimply;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportCipSimplies implements FromView
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $cipSimply = CheklistCipSimply::findOrFail($this->id);
        return view('exports.cip_simply', compact('cipSimply'));
    }
}
