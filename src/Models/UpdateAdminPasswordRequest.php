<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateAdminPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $esAdminPassword;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'esAdminPassword' => 'esAdminPassword',
        'clientToken'     => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->esAdminPassword) {
            $res['esAdminPassword'] = $this->esAdminPassword;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAdminPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['esAdminPassword'])) {
            $model->esAdminPassword = $map['esAdminPassword'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
