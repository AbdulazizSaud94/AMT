<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
  public function rfqs(){
    return $this->belongsToMany('App\Rfq', 'rfq_division');
  }
}
