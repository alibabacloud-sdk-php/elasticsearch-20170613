<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ValidateShrinkNodesRequest extends Model
{
    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var bool
     */
    public $ignoreStatus;
    protected $_name = [
        'nodeType'     => 'nodeType',
        'ignoreStatus' => 'ignoreStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->ignoreStatus) {
            $res['ignoreStatus'] = $this->ignoreStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateShrinkNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['ignoreStatus'])) {
            $model->ignoreStatus = $map['ignoreStatus'];
        }

        return $model;
    }
}