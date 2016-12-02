<?php

namespace App\Models\Pricing;

use Illuminate\Database\Eloquent\Model;

class Shell extends Model
{
	protected $table = 'pricing_shells';

    protected $fillable = [
    	'name',
    	'description',
    ];
}
