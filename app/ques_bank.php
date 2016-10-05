<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ques_bank extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'ref', 'question', 'points','round_num',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'flag', 'remember_token',
    ];
}