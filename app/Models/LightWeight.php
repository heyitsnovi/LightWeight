<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;


class LightWeight extends Model{

	protected $table = 'names';
	protected $fillable = ['id','name','created_at','updated_at'];

}