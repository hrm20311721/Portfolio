<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function front()
    {
        return $this->where('category', 'front')->get();
    }

    public function back()
    {
        return $this->where('category', 'back')->get();
    }

    public function others()
    {
        return $this->where('category', 'others')->get();
    }
}
