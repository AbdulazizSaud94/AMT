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
    return $this->belongsToMany('App\System', 'rfq_system');
  }

  public function documents(){
    return $this->belongsToMany('App\Document', 'rfq_document');
  }

  public function workscopes(){
    return $this->belongsToMany('App\Workscope', 'rfq_workscope');
  }

  public function devisions(){
    return $this->belongsToMany('App\Devision', 'rfq_devision');
  }

  public function competitors(){
    return $this->belongsToMany('App\Competitor', 'rfq_competitor');
  }
}
