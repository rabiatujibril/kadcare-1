<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $firstname firstname
@property varchar $lastname lastname
@property varchar $othernames othernames
@property date $dob dob
@property enum $gender gender
@property varchar $phone phone
@property enum $marital_status marital status
@property varchar $address address
@property bigint $facility_id facility id
@property bigint $created_by created by
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class Patient extends Model
{
    const MARITAL_STATUS_SINGLE='Single';

const MARITAL_STATUS_MARRIED='Married';

const MARITAL_STATUS_DIVORCED='Divorced';

const MARITAL_STATUS_WIDOWED='Widowed';

const MARITAL_STATUS_SEPARATED='Separated';

const GENDER_MALE='Male';

const GENDER_FEMALE='Female';

    /**
    * Database table name
    */
    protected $table = 'patients';

    /**
    * Mass assignable columns
    */
    protected $fillable=['firstname',
'lastname',
'othernames',
'dob',
'gender',
'phone',
'marital_status',
'address',
'facility_id',
'created_by'];

    /**
    * Date time columns.
    */
    protected $dates=['dob'];



    public function scopeFacility($query, int $facility_id = null) {
        if(!is_null($facility_id))
            return $query->where('facility_id', $facility_id);
        return $query->where('facility_id', session('facility')->id);
    }

    public function fullname(){
        return $this->lastname. ' '. $this->firstname . ' ' . $this->othernames;
    }

}
