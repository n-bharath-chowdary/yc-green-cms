<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'one_liner',
        'category',
        'logo_url',
        'website',
    ];

    protected $casts = [
        'category' => 'string',
    ];
}
