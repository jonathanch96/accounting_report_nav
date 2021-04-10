<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BSExport implements FromView,ShouldAutoSize,WithColumnFormatting,WithStyles
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
    public function styles(Worksheet $sheet){
    	$row_format = array();
    	$counter = count($this->data[0]['detail']);
    	$row_start=6;

        //add bold header
    	$row_format[5]=['font' => ['bold' => true]];
    	$row_format[6]=['font' => ['bold' => true]];



    	for ($i=0; $i <$counter ; $i++) {
    		$row_start+=count($this->data[0]["detail"][$i]["detail"])+1;
    		$row_format[$row_start]=['font' => ['bold' => true]];
    		$row_start++;

    	} 
    	return $row_format;
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
    	$counter = count($this->data);
    	for ($i=1; $i <$counter+1 ; $i++) { 
    		$colformat[$this->getColumn($i)]='_(* #,##0_);_(* (#,##0);_(* "-"??_);_(@_)';
    	}
    	return $colformat;
    }
    public function view() : View
    {
    	return view('reports.bs_report_template', [
    		'data'=>$this->data,
    		'period_from'=>$this->period_from,
    		'period_to'=>$this->period_to,

    	]);
    }
}
