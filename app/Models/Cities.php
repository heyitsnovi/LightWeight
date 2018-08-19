<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Cities extends Model
{
	protected $table = 'cities';
	protected $fillable = ['city_id','city_name','location','created_at','updated_at'];
}