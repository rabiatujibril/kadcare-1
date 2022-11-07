<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $patient_id patient id
@property bit $status status
@property bit $is_repeat_visit is repeat visit
@property bit $referral_status referral status
@property varchar $reference reference
@property bigint $created_by created by
@property bigint $type_id type id
@property varchar $reason reason
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Encounter extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'encounters';

    /**
    * Mass assignable columns
    */
    protected $fillable=['patient_id',
'status',
'is_repeat_visit',
'referral_status',
'reference',
'created_by',
'type_id',
'reason'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}