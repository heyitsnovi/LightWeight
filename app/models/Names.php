<?php
namespace Core\Models;

use \Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Names extends Model
{
	protected $table = 'names';
	protected $fillable = ['name','age'];
	protected $connection = 'default';
}