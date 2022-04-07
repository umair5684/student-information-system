<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fetchapi extends Model
{
    protected $guarded=[];
    protected $fillable = ['fullname','rollno','program','semester','phone_no','address','email',];
}
