<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $number number
@property bigint $facility_id facility id
@property enum $status status
@property bigint $user_id user id
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class Request extends Model
{
    const STATUS_PENDING='Pending';

const STATUS_COSTED='Costed';

const STATUS_REJECTED='Rejected';

const STATUS_DELIVERED='Delivered';

const STATUS_APPROVED='Approved';

    /**
    * Database table name
    */
    protected $table = 'requests';

    /**
    * Mass assignable columns
    */
    protected $fillable=['number',
'facility_id',
'status',
'user_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];



    public function items(){
        return $this->hasMany(RequestItem::class, 'request_id');
    }

    public function facility(){
        return $this->belongsTo(Facility::class, 'facility_id')->with('ward');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getAmount(){
        $amount = 0;
        foreach($this->items as $item){
            $amount += ($item->approved_quantity * $item->unit_price);
        }
        return $amount;
    }
}
