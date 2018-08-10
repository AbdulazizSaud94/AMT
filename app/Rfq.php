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
}
