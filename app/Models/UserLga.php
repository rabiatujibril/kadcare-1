<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $user_id user id
@property bigint $lga_id lga id
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class UserLga extends Model
{

    /**
    * Database table name
    */
    protected $table = 'user_lgas';

    /**
    * Mass assignable columns
    */
    protected $fillable=['user_id',
'lga_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];


    public function lga(){
        return Lga::find($this->lga_id);
    }



}
