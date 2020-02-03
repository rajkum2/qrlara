<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version February 3, 2020, 6:57 pm UTC
 *
 * @property string name
 * @property integer user_id
 * @property integer qrcode_owner_id
 * @property integer qrcode_id
 * @property string payment_method
 * @property number amount
 * @property string message
 * @property string status
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'amount',
        'message',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id' => 'integer',
        'qrcode_owner_id' => 'integer',
        'qrcode_id' => 'integer',
        'payment_method' => 'string',
        'amount' => 'float',
        'message' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'user_id' => 'required',
        'qrcode_id' => 'required',
        'amount' => 'required',
        'status' => 'required'
    ];

    
}
