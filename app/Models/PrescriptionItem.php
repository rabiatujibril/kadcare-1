<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $prescription_id prescription id
@property decimal $price price
@property varchar $strength strength
@property varchar $description description
@property bigint $created_by created by
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class PrescriptionItem extends Model
{

    /**
    * Database table name
    */
    protected $table = 'prescription_items';

    /**
    * Mass assignable columns
    */
    protected $fillable=['prescription_id',
'price',
'strength',
'description',
'created_by'];

    /**
    * Date time columns.
    */
    protected $dates=[];


    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by');
    }


}
