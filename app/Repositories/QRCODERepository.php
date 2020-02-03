<?php

namespace App\Repositories;

use App\Models\QRCODE;
use App\Repositories\BaseRepository;

/**
 * Class QRCODERepository
 * @package App\Repositories
 * @version February 3, 2020, 6:34 pm UTC
*/

class QRCODERepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return QRCODE::class;
    }
}
