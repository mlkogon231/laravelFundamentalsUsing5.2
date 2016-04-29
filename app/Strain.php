<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strain extends Model
{
   	protected $fillable = [
	  'strain', 'notes', 'type', 'THC', 'CBD'
	];
}
