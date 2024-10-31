<?php

namespace App\Models;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserPhone extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
