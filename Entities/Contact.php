<?php

/**
 * Made by CV. IRANDO
 * https://irando.co.id ©2023
 * info@irando.co.id
 */
 
namespace Modules\Contacts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'photo',
        'dob',
        'phone_number',
        'address',
        'insurance_number',
        'hire_date',
        'last_working_date',
        'kids',
        'marital_status',
        'gender',
    ];
}
