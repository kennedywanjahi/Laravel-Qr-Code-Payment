<?php

namespace App\Repositories;

use App\Models\Qrcode;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QrcodeRepository
 * @package App\Repositories
 * @version November 28, 2018, 8:43 am UTC
 *
 * @method Qrcode findWithoutFail($id, $columns = ['*'])
 * @method Qrcode find($id, $columns = ['*'])
 * @method Qrcode first($columns = ['*'])
*/
class QrcodeRepository extends BaseRepository
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
     * Configure the Model
     **/
    public function model()
    {
        return Qrcode::class;
    }
}
