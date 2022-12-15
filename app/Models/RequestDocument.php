<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $request_id request id
@property varchar $url url
@property varchar $note note
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class RequestDocument extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'request_documents';

    /**
    * Mass assignable columns
    */
    protected $fillable=['request_id',
'url',
'note'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}