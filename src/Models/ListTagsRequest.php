<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListTagsRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'body'         => 'body',
        'pageSize'     => 'pageSize',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
