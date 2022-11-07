<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $value value
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Configuration extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'configurations';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'value'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}