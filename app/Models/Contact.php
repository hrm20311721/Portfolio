<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'type',
        'detail'
    ];

    public function storeContact($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->type = $data['type'];
        $this->detail = $data['detail'];
        $this->save();
    }

    public function countUnRead()
    {
        return $this->where('checked',false)->count();
    }

    public function checked(Int $contact_id)
    {
        $this->id = $contact_id;
        $this->checked = true;
        $this->update();
        return;
    }

    public function unChecked(Int $contact_id)
    {
        $this->id = $contact_id;
        $this->checked = false;
        $this->update();
        return;
    }

}
