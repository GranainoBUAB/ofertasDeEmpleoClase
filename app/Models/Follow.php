<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    //
    protected $fillable =[
        'works_id',
        'news',
    ];

    public function work(){
        return $this->belongsTo(Work::class);
    }
}
