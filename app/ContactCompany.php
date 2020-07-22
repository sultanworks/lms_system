<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactCompany extends Model
{
    use SoftDeletes;

    public $table = 'contact_companies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_name',
        'company_address',
        'company_website',
        'company_email',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
