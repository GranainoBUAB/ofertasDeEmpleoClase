<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'company',
        'workapply',

    ];

    //Relacion One-to-Many con Follow
    public function follows(){
        return $this->hasMany(Follow::class);
    }
}
