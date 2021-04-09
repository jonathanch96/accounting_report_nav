<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
class PLExport implements FromView,ShouldAutoSize,WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $data;
    private $period_from;
    private $period_to;
    public function __construct($data,$period_from,$period_to){
    	$this->data = $data;
    	$this->period_from = $period_from;
    	$this->period_to = $period_to;
    }
    public function getColumn($number){
        $alphabet = array( 'A', 'B', 'C', 'D', 'E',
            'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O',
            'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y',
            'Z'
        );
        return $alphabet[$number];
    }

    public function columnFormats(): array
    {
        $colformat = array();
        $counter = count($this->data)*2;
        for ($i=1; $i <$counter ; $i+=2) { 
            $colformat[$this->getColumn($i)]="#,##0";
            $colformat[$this->getColumn($i+1)]="0.00%";

        }
        return $colformat;
    }
    public function view() : View
    {
        return view('reports.pl_report_template', [
          'data'=>$this->data,
          'period_from'=>$this->period_from,
          'period_to'=>$this->period_to,

      ]);
    }
}
