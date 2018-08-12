<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workscope extends Model
{
  public function rfqs(){
    return $this->belongsToMany('App\Rfq', 'rfq_workscope');
  }
}
