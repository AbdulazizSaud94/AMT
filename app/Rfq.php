<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
  // Table name
  protected $table = 'rfqs';
  // Primary key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function client(){
    return $this->belongsTo('App\Client');
  }

  public function systems(){
    return $this->belongsToMany('App\System');
  }

  public function documents(){
    return $this->belongsToMany('App\Document');
  }

  public function workscopes(){
    return $this->belongsToMany('App\Workscope');
  }

  public function devisions(){
    return $this->belongsToMany('App\Devision');
  }

  public function competitors(){
    return $this->belongsToMany('App\Competitor');
  }
}
