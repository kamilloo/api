<?php

namespace App\Models\Pricing;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
	protected $table = 'pricing_formats';

    protected $fillable = [
    	'name',
    	'description',
    	'coverage',
    	'edge',
    ];
}
