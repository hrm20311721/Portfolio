<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class,'portfolio_skills','portfolio_id','skill_id');
    }


}
