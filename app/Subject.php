<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
      public function subject_strand()
    {
    	return $this->hasMany(Subject_Strand::class);
    }
}
