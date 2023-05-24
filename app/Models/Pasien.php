<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table  = 'data_pasien';
    protected $fillable = ['id','Patient_Name', 'Gender', 'Email_Address','Service','Doctor','Phone_Number'];
}
