<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class GL_SubCategoryMapping extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	protected $fillable = [
		'category_id',
		'subcategory_id',
	];
}
