<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $user_id user id
@property bigint $facility_id facility id
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class UserFacility extends Model
{

    /**
    * Database table name
    */
    protected $table = 'user_facilities';

    /**
    * Mass assignable columns
    */
    protected $fillable=['user_id',
'facility_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];



    public function facility(){
        return Facility::find($this->facility_id);
    }

}
