<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
  public function rfqs(){
    return $this->belongsToMany('App\Rfq');
  }
}
