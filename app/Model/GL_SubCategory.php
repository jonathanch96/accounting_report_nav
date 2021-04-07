<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class GL_SubCategory extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [
		'name',
		'order',
		'formula',
		'additional_formula',
	];
	public function gl_accounts(){
		return $this->hasMany('App\Model\GL_Account','category_id','id');
	}
}
