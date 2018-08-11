<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
  public function rfqs(){
    return $this->belongsToMany('App\Rfq', 'rfq_competitor');
  }
}
