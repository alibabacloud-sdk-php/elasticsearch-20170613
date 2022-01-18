<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Logstash;

use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @description Type
     *
     * @var string
     */
    public $type;

    /**
     * @description VpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description VsArea
     *
     * @var string
     */
    public $vsArea;

    /**
     * @description VswitchId
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'type'      => 'type',
        'vpcId'     => 'vpcId',
        'vsArea'    => 'vsArea',
        'vswitchId' => 'vswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vsArea) {
            $res['vsArea'] = $this->vsArea;
        }
        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vsArea'])) {
            $model->vsArea = $map['vsArea'];
        }
        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }

        return $model;
    }
}
