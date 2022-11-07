<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $measure measure
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class DrugType extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'drug_types';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'measure'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}