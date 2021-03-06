<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class TriggerNetworkRequest extends Model
{
    /**
     * @description 动作类型。CLOSE：关闭; OPEN：开启
     *
     * @var string
     */
    public $actionType;

    /**
     * @description 网络类型。PUBLIC：公网；PRIVATE：私网
     *
     * @var string
     */
    public $networkType;

    /**
     * @description 实例类型。KIBANA kibana公私网/WORKER 集群公私网
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'actionType'  => 'actionType',
        'networkType' => 'networkType',
        'nodeType'    => 'nodeType',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['actionType'] = $this->actionType;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionType'])) {
            $model->actionType = $map['actionType'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
