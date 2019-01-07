<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderCredential extends Model
{
    protected $fillable = [
        'user_id', 'provider_given_id',
        'name', 'email',
        'provider', 'token'
    ];
}
