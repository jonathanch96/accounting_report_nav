<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NAV\GL_Account_Nav;
use App\Model\GL_Account;
class GLAccountController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
	private function getData(){
		//$data = GL_Account_Nav::where('Account Type','=',0)->get();
		$data = GL_Account_Nav::get();
		foreach ($data as $key => $d) {
			$temp_gl = GL_Account::where('No_','=',$d->No_)->first();
			$data = [
				'No_'=>$d['No_'],
				'Name'=>$d['Name'],
				'Income_Balance'=>$d['Income_Balance'],
				'Account_type'=>$d['Account Type']
			];
			if($temp_gl){
				$temp_gl->update($data);
			}else{
				$temp_gl = GL_Account::create($data);
			}
		}
	}
	public function index(Request $request){
		$this->getData();
		return parent::index($request);
	}
}
