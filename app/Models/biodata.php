<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    use HasFactory;
    protected $table = 'biodatas';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'email', 'tempat_lahir', 'tanggal_lahir', 'deskripsi'];

}
