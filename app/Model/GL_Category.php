<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class GL_Category extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	protected $fillable = [
		'name',
		'order',
		'formula',
		'additional_formula',
		'category_id',
		'report_type_id',
	];
}
