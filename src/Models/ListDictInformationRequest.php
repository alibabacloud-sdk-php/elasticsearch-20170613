<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDictInformationRequest extends Model
{
    /**
     * @var string
     */
    public $analyzerType;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'analyzerType' => 'analyzerType',
        'body'         => 'body',
        'bucketName'   => 'bucketName',
        'key'          => 'key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzerType) {
            $res['analyzerType'] = $this->analyzerType;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDictInformationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyzerType'])) {
            $model->analyzerType = $map['analyzerType'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
