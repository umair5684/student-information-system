<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 *
 * @property $id
 * @property $fullname
 * @property $rollno
 * @property $program
 * @property $semester
 * @property $contactno
 * @property $address
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    use SoftDeletes;

    static $rules = [
		'fullname' => 'required',
		'rollno' => 'required',
		'program' => 'required',
		'semester' => 'required',
		'phone_no' => 'required',
		'address' => 'required',
        'email'=>'required|email',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname','rollno','program','semester','phone_no','address','email','file'];



}
