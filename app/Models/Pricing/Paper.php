<?php

namespace App\Models\Pricing;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
	protected $table = 'pricing_papers';

    protected $fillable = [
    	'name',
    	'description',
    	'shining',
    	'shell_id',
    	'weight_id',
    ];
}
