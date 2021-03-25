<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempRegistration extends Model
{
    use HasFactory;
    //protected $table='temp_registrations';
    protected $fillable=[
        'name',
        'company',
        'job',
        'address',
        'city',
        'pin',
        'state',
        'country',
        'tel',
        'fax',
        'mobile',
        'email',
        'website',
        'activity',
        'interest',
        'about',
        'turnover',
    ];
}
