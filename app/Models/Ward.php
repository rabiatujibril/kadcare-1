<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $lga_id lga id
@property varchar $name name
@property bit $status status
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Ward extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'wards';

    /**
    * Mass assignable columns
    */
    protected $fillable=['lga_id',
'name',
'status'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}