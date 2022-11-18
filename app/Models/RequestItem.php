<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $request_id request id
@property bigint $drug_id drug id
@property int $available_quantity available quantity
@property int $requested_quantity requested quantity
@property int $approved_quantity approved quantity
@property int $unit_price unit price
@property enum $status status
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class RequestItem extends Model
{
    const STATUS_PENDING='Pending';

const STATUS_COSTED='Costed';

const STATUS_REJECTED='Rejected';

const STATUS_APPROVED='Approved';

const STATUS_DELIVERED='Delivered';

    /**
    * Database table name
    */
    protected $table = 'request_items';

    /**
    * Mass assignable columns
    */
    protected $fillable=['request_id',
'drug_id',
'available_quantity',
'requested_quantity',
'approved_quantity',
'unit_price',
'status'];

    /**
    * Date time columns.
    */
    protected $dates=[];


    public function drug(){
        return $this->belongsTo(Drug::class)->with('category', 'type');
    }


}
