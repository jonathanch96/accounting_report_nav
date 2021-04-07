<?php

namespace App\Model\NAV;

use Illuminate\Database\Eloquent\Model;

class GL_Entry_Nav extends Model
{
	protected $connection = 'sqlsrv';
	protected $table = 'GCP.dbo.GCP LIVE$G_L Entry';
}
