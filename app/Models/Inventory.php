<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $facility_id facility id
@property bigint $drug_id drug id
@property int $available_quantity available quantity
@property int $last_stock_quantity last stock quantity
@property int $quantity_alert quantity alert
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Inventory extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'inventories';

    /**
    * Mass assignable columns
    */
    protected $fillable=['facility_id',
'drug_id',
'available_quantity',
'last_stock_quantity',
'quantity_alert'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}