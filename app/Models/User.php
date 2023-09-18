<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['nome','email','cpf','perfil'];


    public function address()
{
    return $this->hasOne(Address::class);
}
    public function addresses()
{
    return $this->hasMany(Address::class);
}
}
