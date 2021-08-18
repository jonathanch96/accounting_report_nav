<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Http\Traits\NavTrait;
use App\Model\GL_Category;
use Excel;
use App\Exports\PLExport;
use \TCG\Voyager\Models\DataType;
class PLController extends \TCG\Voyager\Http\Controllers\Controller
{
	use NavTrait;
	
	public function index(Request $request)
	{
		if(!Auth::user()->hasPermission('browse_pl_report')){
			abort(403,"This action is unauthorized.");
		}

		return view('pl_report',[]);

	}
	public function download(Request $request){
		if(!Auth::user()->hasPermission('browse_pl_report')){
			abort(403,"This action is unauthorized.");
		}
		$this->validate($request,[
			'month_from'=>'required|date_format:m/Y',
			'month_to'=>'required|date_format:m/Y'
		]);
		$tb = $this->getData($request->month_from,$request->month_to,'pl');
		$pl = $this->tbtopl($tb);
		$period_from = date('M Y');
		$period_to = date('M Y');
		$data = array();
		$category = GL_Category::where('report_type_id','1')->orderBy('order')->get();
		$temp_array = array();
		$flag_first_pl = true;
		foreach ($pl as $key => $p) {
			$temp_category_data_detail = array();
			$temp_array['date'] = $p["date"];
			if($flag_first_pl){
				$flag_first_pl=false;
				$period_from = date('M Y',strtotime($p["date"]));
			}
			$period_to = date('M Y',strtotime($p["date"]));

			foreach ($category as $key => $c) {
				$temp_detail = array();

				//kalkulasi total/summarynya
				$formula = $c->formula;
				$value=0;
				$counter=0;
				$action = "+";
				$divide = 1;
				while ($formula!="") {
					$pos_plus = strpos($formula, "+")?strpos($formula, "+"):-1;
					$pos_min = strpos($formula, "-")?strpos($formula, "-"):-1;
					$data_to_search = 0;
					if(($pos_plus<$pos_min&&$pos_plus!=-1)||($pos_min==-1&&$pos_plus!=-1)){
						//action + first
						$data_to_search = substr($formula, 0,$pos_plus);
						$prev_action = $action;
						$action = substr($formula, $pos_plus,1); //nnti di kaliin ke sebelumnya
						$formula = substr($formula, $pos_plus+1);
					}else if(($pos_min<$pos_plus&&$pos_min!=-1)||($pos_plus==-1&&$pos_min!=-1)){
						$data_to_search = substr($formula, 0,$pos_min);
						$prev_action = $action;
						$action = substr($formula, $pos_min,1);
						$formula = substr($formula, $pos_min+1);
					}else{
						$data_to_search = $formula;
						$formula="";
						$prev_action = $action;
					}	
					// if($c->name=='Estimasi Pajak'){
					// 	print("SEACH=".$data_to_search."<br>");
					// 	print("ACTION=".$action."<br>");
					// 	print("PREV_ACTION=".$prev_action."<br>");
					// 	print("FORMULA=".$formula."<br>");
					// }
					// $dataType = DataType::where('slug',$c->additional_formula)->first();
					// $dataModel = $dataType?$dataType->model_name::find($data_to_search):null;
						//if($counter==4)dd($dataModel);
					if($c->additional_formula == 'g-l-sub-categories'){
						foreach ($p["detail"] as $key => $pdet) {
							if($pdet["name"]=="Penjualan Net"){
								$divide = $pdet['value'];
							}
							if($pdet["id"]==$data_to_search){
								$temp_val = $pdet['value']*($prev_action=="-"?-1:1);
								//if($c->id==10)dd($tb);

							//if($c->name=='Estimasi Pajak')print($value." ".$prev_action." ".$temp_val. " = ");
								$value+=$temp_val;
							//if($c->name=='Estimasi Pajak')print($value. " <br> ");
							}
						}
					}else{
						//internal 
						foreach ($p["detail"] as $key => $pdet) {
							if($pdet["name"]=="Penjualan Net"){
								$divide = $pdet['value'];
								break;
							}
						}

						foreach ($temp_array['detail'] as $key => $ta) {
							if($ta['id']==$data_to_search){
								$temp_val = $ta['value']*($prev_action=="-"?-1:1);
								$value+=$temp_val;
							}
						}
					}
					

					$counter++;
				}

				if($c->name=='Estimasi Pajak'){
					$value*=0.22;
				}

				//detail data
				foreach ($p["detail"] as $key => $pdet) {
					if($pdet["category_id"]==$c->id){
						array_push($temp_detail, $pdet);
					}
				}

				// if($c->name=='Estimasi Pajak'){
				// 	dd($value);
				// }
				if(count($temp_detail)<=1){
					$temp_detail = array();
				}
				
				array_push($temp_category_data_detail, [
					'id'=>$c->id,
					'name'=>$c->name,
					'detail'=>$temp_detail,
					'value'=>$value,
					'percentage'=>$value/$divide,
				]);
				$temp_array['detail']=$temp_category_data_detail;
			}
			array_push($data, $temp_array);


		}
		$data = array_reverse($data);
		//dd($data);
		
		return Excel::download(new PLExport($data,$period_from,$period_to), 'pl_report.xlsx');
		// return view('reports.pl_report_template',[
		// 	'data'=>$data,
		// 	'period_from'=>$period_from,
		// 	'period_to'=>$period_to,

		// ]);

	}
	
}
