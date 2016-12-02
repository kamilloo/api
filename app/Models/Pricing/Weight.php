<?php

namespace App\Models\Pricing;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
	protected $table = 'pricing_weights';

    protected $fillable = [
    	'weight',
    	'name',
    ];
}
