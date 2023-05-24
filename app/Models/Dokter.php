<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table  = 'data_dokter';
    protected $fillable = ['Dokter_Name', 'Gender', 'Email_Address', 'Service', 'Phone_Number'];
}
