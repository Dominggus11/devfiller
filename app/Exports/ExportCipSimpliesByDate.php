<?php

namespace App\Exports;

use App\Models\CheklistCipSimply;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;

class ExportCipSimpliesByDate implements WithMultipleSheets
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
        $cipSimplies = CheklistCipSimply::whereBetween('tanggal', [$this->startDate, $this->endDate])->get();
        
        foreach ($cipSimplies as $index => $cipSimply) {
            $sheets[] = new CipSimplySheet($cipSimply);
        }

        return $sheets;
    }
}

class CipSimplySheet implements FromView, WithTitle
{
    protected $cipSimply;

    public function __construct(CheklistCipSimply $cipSimply)
    {
        $this->cipSimply = $cipSimply;
    }

    public function view(): View
    {
        return view('exports.cip_simply', ['cipSimply' => $this->cipSimply]);
    }

    public function title(): string
    {
        // Menggunakan ID sebagai judul sheet
        return 'Sheet ' . $this->cipSimply->operator;
    }
}
