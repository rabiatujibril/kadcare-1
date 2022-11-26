<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property bigint $user_id user id
 * @property bigint $facility_id facility id
 * @property int $status status
 * @property timestamp $created_at created at
 * @property timestamp $updated_at updated at
 */
class UserHealthWorker extends Model
{

    /**
     * Database table name
     */
    protected $table = 'user_health_workers';

    /**
     * Mass assignable columns
     */
    protected $fillable = ['user_id',
        'facility_id',
        'status'];

    /**
     * Date time columns.
     */
    protected $dates = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function facility(){
        return $this->belongsTo(Facility::class, 'facility_id');
    }


}
