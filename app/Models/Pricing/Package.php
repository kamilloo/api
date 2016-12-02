<?php

namespace App\Models\Pricing;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
	protected $table = 'pricing_packages';

    protected $fillable = [
    	'amount',
    	'price_net',
    	'price_gross',
    	'tax',
    	'paper_id',
    	'format_id',
    ];
}
