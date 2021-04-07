<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
class PLController extends \TCG\Voyager\Http\Controllers\Controller
{
	
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
		//$date_from =
	}
	
}
