<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $code code
@property varchar $name name
@property varchar $description description
@property bigint $category_id category id
@property bigint $type_id type id
@property decimal $price price
@property varchar $strength strength
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class Drug extends Model
{

    /**
    * Database table name
    */
    protected $table = 'drugs';

    /**
    * Mass assignable columns
    */
    protected $fillable=['code',
'name',
'description',
'category_id',
'type_id',
'price',
'strength'];

    /**
    * Date time columns.
    */
    protected $dates=[];



    public function category(){
        return $this->belongsTo(DrugCategory::class);
    }

    public function type(){
        return $this->belongsTo(DrugType::class);
    }

}
