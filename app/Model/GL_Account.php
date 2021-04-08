<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class GL_Account extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	protected $fillable = [
		'No_',
		'Name',
		'Income_Balance',
		'Account_type',
		'category_id',
	];
	public function glnav(){
		return $this->belongsTo('App\Model\NAV\GL_Account_Nav','No_','No_');
	}
	public function subcategory(){
		return $this->belongsTo('App\Model\GL_SubCategory','category_id');
	}
}
