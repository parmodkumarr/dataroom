<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    
    public $timestamps = true;

    protected $fillable = ['document_id', 'Action','project_id', 'Auth','time'];
}
