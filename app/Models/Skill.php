<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'name_en',
        'name_jp',
        'levels'
    ];

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

    public function storeSkill(Array $data)
    {
        $this->category = $data['category'];
        $this->name_en  = $data['name_en'];
        $this->name_jp  = $data['name_jp'];
        $this->levels   = $data['levels'];
        $this->save();
        return;
    }

    public function updateSkill(Int $skill_id, Array $data)
    {
        $this->id = $skill_id;
        $this->category = $data['category'];
        $this->name_en  = $data['name_en'];
        $this->name_jp  = $data['name_jp'];
        $this->levels   = $data['levels'];
        $this->update();
        return;
    }
}
