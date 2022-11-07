<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $role_id role id
@property bigint $permission_id permission id
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class RolePermission extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'role_permissions';

    /**
    * Mass assignable columns
    */
    protected $fillable=['role_id',
'permission_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}