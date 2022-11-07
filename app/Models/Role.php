<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $description description
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Role extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'roles';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'description'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}