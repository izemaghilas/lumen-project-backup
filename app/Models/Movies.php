<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model {

    protected $table = 'movies';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'name',
        'type'
    ];

}