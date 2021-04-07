<?php

namespace App\Model\NAV;

use Illuminate\Database\Eloquent\Model;

class GL_Account_Nav extends Model
{
    protected $connection = 'sqlsrv';
	protected $table = 'GCP.dbo.GCP LIVE$G_L Account';
	public function glEntryYTD($date){
		return $this->hasMany('App\Model\NAV\GL_Entry_Nav','G_L Account No_','No_');
	}
}
