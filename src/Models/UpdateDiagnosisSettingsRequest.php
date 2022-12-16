<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateDiagnosisSettingsRequest extends Model
{
    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $body;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'body'        => 'body',
        'lang'        => 'lang',
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
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDiagnosisSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        return $model;
    }
}
