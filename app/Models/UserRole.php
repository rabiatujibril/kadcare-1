<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $user_id user id
@property bigint $role_id role id
@property datetime $created_at created at
@property datetime $updated_at updated at
   
 */
class UserRole extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'user_roles';

    /**
    * Mass assignable columns
    */
    protected $fillable=['user_id',
'role_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}