<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function path()
    {
    	return '/report/' . $this->id;
    }
}
