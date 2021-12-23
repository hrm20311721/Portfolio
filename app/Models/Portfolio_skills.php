<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_skills extends Model
{

    public $timestamps = false; //update_at, created_atを無効に
    public $incrementing = false; //Auto Incrementしない

    protected $primaryKey = [
        'portfolio_id',
        'skill_id'
    ];

    protected $fillable = [
        'portfolio_id',
        'skill_id'
    ];


}
