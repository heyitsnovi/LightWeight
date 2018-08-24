<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Airplanes extends Model
{
	protected $table = 'airplane_models';
	protected $fillable = ['model_id','manufacturer','model','created_at','updated_at'];
}