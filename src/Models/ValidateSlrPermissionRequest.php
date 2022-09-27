<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ValidateSlrPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $rolename;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'rolename'    => 'rolename',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->rolename) {
            $res['rolename'] = $this->rolename;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateSlrPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['rolename'])) {
            $model->rolename = $map['rolename'];
        }

        return $model;
    }
}
