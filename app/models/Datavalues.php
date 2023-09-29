<?php
namespace Core\Models;

use \Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Datavalues extends Model
{
	protected $table = 'data_values';
	protected $fillable = ['value'];
	protected $connection = 'secondary';
    public $timestamps = false;
}