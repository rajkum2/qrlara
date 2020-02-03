<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class QRCODE
 * @package App\Models
 * @version February 3, 2020, 6:34 pm UTC
 *
 * @property integer user_id
 * @property string website
 * @property string product_name
 * @property string product_url
 * @property string company_name
 * @property string callback_url
 * @property integer qrcode_path
 * @property number amount
 * @property boolean status
 */
class QRCODE extends Model
{
    use SoftDeletes;

    public $table = 'qrcodes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'website',
        'product_name',
        'product_url',
        'company_name',
        'callback_url',
        'qrcode_path',
        'amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'website' => 'string',
        'product_name' => 'string',
        'product_url' => 'string',
        'company_name' => 'string',
        'callback_url' => 'string',
        'qrcode_path' => 'integer',
        'amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'product_name' => 'required',
        'company_name' => 'required',
        'callback_url' => 'required',
        'amount' => 'required',
        'status' => 'required'
    ];

    
}
