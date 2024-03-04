<?php

namespace App\Exports;

use App\Models\CheklistAsSimply;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;

class ExportAsSimpliesByDate implements WithMultipleSheets
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
        $asSimplies = CheklistAsSimply::whereBetween('tanggal', [$this->startDate, $this->endDate])->get();
        
        foreach ($asSimplies as $index => $asSimply) {
            $sheets[] = new AsSimplySheet($asSimply);
        }

        return $sheets;
    }
}

class AsSimplySheet implements FromView, WithTitle
{
    protected $asSimply;

    public function __construct(CheklistAsSimply $asSimply)
    {
        $this->asSimply = $asSimply;
    }

    public function view(): View
    {
        return view('exports.as_simply', ['asSimply' => $this->asSimply]);
    }

    public function title(): string
    {
        // Menggunakan ID sebagai judul sheet
        return 'Sheet ' . $this->asSimply->operator;
    }
}
