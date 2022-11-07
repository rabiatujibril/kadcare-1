<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
   @property varchar $firstname firstname
@property varchar $lastname lastname
@property varchar $othernames othernames
@property enum $gender gender
@property date $dob dob
@property enum $marital_status marital status
@property varchar $username username
@property varchar $password password
@property varchar $email email
@property varchar $phone phone
@property enum $status status
@property varchar $remember_token remember token
@property varchar $fcm_token fcm token
@property varchar $email_verified_at email verified at
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    const STATUS_1='1';

const STATUS_0='0';

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
    protected $table = 'users';

    /**
    * Mass assignable columns
    */
    protected $fillable=['firstname',
'lastname',
'othernames',
'gender',
'dob',
'marital_status',
'username',
'email',
'phone',
'status',
'fcm_token',
'email_verified_at'];

    /**
    * Date time columns.
    */
    protected $dates=['dob'];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
