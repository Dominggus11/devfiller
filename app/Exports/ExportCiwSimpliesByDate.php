<?php

namespace App\Exports;

use App\Models\CheklistCiwSimply;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;

class ExportCiwSimpliesByDate implements WithMultipleSheets
{
    use Exportable;
    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = Carbon::parse($startDate)->startOfDay();
        $this->endDate = Carbon::parse($endDate)->endOfDay();
    }

    public function sheets(): array
    {
        $sheets = [];
        $ciwSimplies = CheklistCiwSimply::whereBetween('tanggal', [$this->startDate, $this->endDate])->get();
        
        foreach ($ciwSimplies as $index => $ciwSimply) {
            $sheets[] = new CiwSimplySheet($ciwSimply);
        }

        return $sheets;
    }
}

class CiwSimplySheet implements FromView, WithTitle
{
    protected $ciwSimply;

    public function __construct(CheklistCiwSimply $ciwSimply)
    {
        $this->ciwSimply = $ciwSimply;
    }

    public function view(): View
    {
        return view('exports.ciw_simply', ['ciwSimply' => $this->ciwSimply]);
    }

    public function title(): string
    {
        // Menggunakan ID sebagai judul sheet
        return 'Sheet ' . $this->ciwSimply->operator;
    }
}
