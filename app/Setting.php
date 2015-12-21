<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	protected $table = 'settings';

    protected $fillable = [
        'company',
        'name',
        'email',
        'telephone',
        'street',
        'address2',
        'town',
        'county',
        'postcode',
        'facebook',
        'twitter',
        'instagram',
        'pinterest',
        'youtube'
    ];
}
