<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property int $encounter_drug_detail_id encounter drug detail id
@property int $drug_id drug id
@property int $dosage_form_id dosage form id
@property varchar $drug_strength drug strength
@property varchar $drug_description drug description
@property int $quantity quantity
@property bigint $encounter_id encounter id
@property varchar $created_by created by
@property float $unit_price unit price
@property datetime $created_at created at
@property datetime $updated_at updated at
   
 */
class Prescription extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'prescriptions';

    /**
    * Mass assignable columns
    */
    protected $fillable=['encounter_drug_detail_id',
'drug_id',
'dosage_form_id',
'drug_strength',
'drug_description',
'quantity',
'encounter_id',
'created_by',
'unit_price'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}