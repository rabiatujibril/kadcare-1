<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $uuid uuid
@property text $connection connection
@property text $queue queue
@property longtext $payload payload
@property longtext $exception exception
@property timestamp $failed_at failed at
   
 */
class FailedJob extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'failed_jobs';

    /**
    * Mass assignable columns
    */
    protected $fillable=['failed_at',
'uuid',
'connection',
'queue',
'payload',
'exception',
'failed_at'];

    /**
    * Date time columns.
    */
    protected $dates=['failed_at'];




}