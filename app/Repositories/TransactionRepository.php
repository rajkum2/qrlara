<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\BaseRepository;

/**
 * Class TransactionRepository
 * @package App\Repositories
 * @version February 3, 2020, 6:57 pm UTC
*/

class TransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Transaction::class;
    }
}
