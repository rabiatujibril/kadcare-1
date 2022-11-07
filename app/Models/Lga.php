<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $code code
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Lga extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'lgas';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'code'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}