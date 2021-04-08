<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Http\Traits\NavTrait;
use App\Model\GL_Category;
use Excel;
use App\Exports\PLExport;
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
		$category = GL_Category::where('report_type_id','1')->get();
		dd($tb);
		foreach ($category as $key => $c) {
			# code...
		}
		foreach ($tb as $key => $t) {
			# code...
		}
		//return Excel::download(new PLExport, 'pl_report.xlsx');
		return view('reports.pl_report_template');

	}
	
}
