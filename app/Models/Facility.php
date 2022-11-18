<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $ward_id ward id
@property varchar $name name
@property varchar $code code
@property varchar $address address
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class Facility extends Model
{

    /**
    * Database table name
    */
    protected $table = 'facilities';

    /**
    * Mass assignable columns
    */
    protected $fillable=['ward_id',
'name',
'code',
'address'];

    /**
    * Date time columns.
    */
    protected $dates=[];


    public function ward(){
        return $this->belongsTo(Ward::class)->with('lga');
    }



}
