<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $title title
@property varchar $description description
@property smallint $type type
@property varchar $source_type source type
@property text $content content
@property enum $status status
@property timestamp $updated_at updated at
@property timestamp $update_at update at
   
 */
class Notification extends Model 
{
    const STATUS_SEEN='Seen';

const STATUS_READ='Read';

const STATUS_DELIVERED='Delivered';

const STATUS_SENT='Sent';

    /**
    * Database table name
    */
    protected $table = 'notifications';

    /**
    * Mass assignable columns
    */
    protected $fillable=['update_at',
'title',
'description',
'type',
'source_type',
'content',
'status',
'update_at'];

    /**
    * Date time columns.
    */
    protected $dates=['update_at'];




}