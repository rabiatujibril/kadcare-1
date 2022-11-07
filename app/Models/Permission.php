<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $module module
@property enum $loggable loggable
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Permission extends Model 
{
    const LOGGABLE_1='1';

const LOGGABLE_0='0';

    /**
    * Database table name
    */
    protected $table = 'permissions';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'module',
'loggable'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}