<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    
    
    public function user()
{
    return $this->belongsTo(User::class, 'id_employe');
}

public function technicien()
{
    return $this->belongsTo(User::class, 'id_technicien');
}

public function comments()
{
    return $this->hasMany(Comment::class);
}
//
}
