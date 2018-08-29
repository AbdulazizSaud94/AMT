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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function systems()
    {
        return $this->belongsToMany('App\System', 'rfq_system');
    }

    public function documents()
    {
        return $this->belongsToMany('App\Document', 'rfq_document');
    }

    public function workscopes()
    {
        return $this->belongsToMany('App\Workscope', 'rfq_workscope');
    }

    public function divisions()
    {
        return $this->belongsToMany('App\Division', 'rfq_division');
    }

    public function competitors()
    {
        return $this->belongsToMany('App\Competitor', 'rfq_competitor');
    }

    public function hasSystem($system){
        $get_system = $this->systems()->where('name',$system)->first();
        if($get_system)
            return true;
        else
            return false;
    }

    public function hasWorkscope($workscope){
        $get_workscope = $this->workscopes()->where('title',$workscope)->first();
        if($get_workscope)
            return true;
        else
            return false;
    }

    public function hasDivision($division){
        $get_division = $this->divisions()->where('name',$division)->first();
        if($get_division)
            return true;
        else
            return false;
    }


}
