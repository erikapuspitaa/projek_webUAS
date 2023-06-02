<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'data_admin';
    protected $fillable = ['id','Admin_Name', 'Gender', 'Email_Address', 'Phone_Number'];
}
