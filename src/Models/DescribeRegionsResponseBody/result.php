<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example https://elasticsearch-cn-hangzhou.console.aliyun.com
     *
     * @var string
     */
    public $consoleEndpoint;

    /**
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @example elasticsearch.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The name of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The endpoint of the region that is exposed in the console.
     *
     * @example available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'consoleEndpoint' => 'consoleEndpoint',
        'localName'       => 'localName',
        'regionEndpoint'  => 'regionEndpoint',
        'regionId'        => 'regionId',
        'status'          => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleEndpoint) {
            $res['consoleEndpoint'] = $this->consoleEndpoint;
        }
        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }
        if (null !== $this->regionEndpoint) {
            $res['regionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consoleEndpoint'])) {
            $model->consoleEndpoint = $map['consoleEndpoint'];
        }
        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }
        if (isset($map['regionEndpoint'])) {
            $model->regionEndpoint = $map['regionEndpoint'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
