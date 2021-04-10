<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Traits\NavTrait;
use App\Model\GL_Category;
use Excel;
use App\Exports\BSExport;
class BSController extends Controller
{
	use NavTrait;
	public function index(Request $request)
	{
		if(!Auth::user()->hasPermission('browse_bs_report')){
			abort(403,"This action is unauthorized.");
		}

		return view('bs_report',[]);

	}
	public function download(Request $request){
		if(!Auth::user()->hasPermission('browse_bs_report')){
			abort(403,"This action is unauthorized.");
		}
		$this->validate($request,[
			'month'=>'required|date_format:m/Y',
		]);
		$tb = $this->getData($request->month,$request->month,'bs');
		$bs = $this->tbtobs($tb);
		$period_from = date('M Y');
		$period_to = date('M Y');
		$temp_array = array();
		$temp_array_2 =array();
		$data = array();
		$data_2 = array();
		$category = GL_Category::where('report_type_id','2')->orderBy('order')->get();
		$flag_first_pl = true;


		foreach ($bs as $key => $p) {
			$temp_category_data_detail = array();
			$temp_category_data_detail_2 = array();
			$temp_array['date'] = $p["date"];
			$temp_array_2['date'] = $p["date"];

			if($flag_first_pl){
				$flag_first_pl=false;
				$period_from = date('M Y',strtotime($p["date"]));
			}
			$period_to = date('M Y',strtotime($p["date"]));

			foreach ($category as $key => $c) {
				$temp_detail = array();
				$temp_detail_2 = array();

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
						foreach ($temp_array_2['detail']??[] as $key => $ta) {
							if($ta['id']==$data_to_search){
								$temp_val = $ta['value']*($prev_action=="-"?-1:1);
								$value+=$temp_val;
							}
						}
					}
					

					$counter++;
				}

				//detail data
				foreach ($p["detail"] as $key => $pdet) {
					if($pdet["category_id"]==$c->id){
						if($c->order<800){
							array_push($temp_detail, $pdet);
						}else{
							array_push($temp_detail_2, $pdet);
						}
					}
				}
				//remove if 1
				if($c->order<800){

					if(count($temp_detail)<=1){
						$temp_detail = array();
					}
					array_push($temp_category_data_detail, [
						'id'=>$c->id,
						'name'=>$c->name,
						'detail'=>$temp_detail,
						'value'=>$value,
					]);
					$temp_array['detail']=$temp_category_data_detail;

				}else{
					if(count($temp_detail_2)<=1){
						$temp_detail_2 = array();
					}
					array_push($temp_category_data_detail_2, [
						'id'=>$c->id,
						'name'=>$c->name,
						'detail'=>$temp_detail_2,
						'value'=>$value,
					]);
					$temp_array_2['detail']=$temp_category_data_detail_2;

				}



			}
			array_push($data, $temp_array);
			array_push($data_2, $temp_array_2);
			
		}

		$data = array_reverse($data);
		$data_2 = array_reverse($data_2);

		// return view('reports.bs_report_template',[
		// 	'data'=>$data,
		// 	'period_from'=>$period_from,
		// 	'period_to'=>$period_to,

		// ]);
		dd($data_2);
		return Excel::download(new BSExport($data,$period_from,$period_to), 'bs_report.xlsx');

	}
}
