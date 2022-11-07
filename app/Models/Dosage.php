<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $type type
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Dosage extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'dosages';

    /**
    * Mass assignable columns
    */
    protected $fillable=['type'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}