<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sinkCluster extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example http://192.168.xx.xx:4101
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example product_info
     *
     * @var string
     */
    public $index;

    /**
     * @example _doc
     *
     * @var string
     */
    public $type;

    /**
     * @example vpc-2ze55voww95g82gak****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example es-cn-09k1rnu3g0002****-worker
     *
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @example 9200
     *
     * @var string
     */
    public $vpcInstancePort;
    protected $_name = [
        'dataSourceType'  => 'dataSourceType',
        'endpoint'        => 'endpoint',
        'index'           => 'index',
        'type'            => 'type',
        'vpcId'           => 'vpcId',
        'vpcInstanceId'   => 'vpcInstanceId',
        'vpcInstancePort' => 'vpcInstancePort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->vpcInstancePort) {
            $res['vpcInstancePort'] = $this->vpcInstancePort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }
        if (isset($map['vpcInstancePort'])) {
            $model->vpcInstancePort = $map['vpcInstancePort'];
        }

        return $model;
    }
}
