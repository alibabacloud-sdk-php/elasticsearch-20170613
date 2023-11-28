<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorResponseBody\result\extendConfigs;

use AlibabaCloud\Tea\Model;

class machines extends Model
{
    /**
     * @description The installation status of the shipper on an ECS instance. Valid values:
     *
     *   heartOk
     *   heartLost
     *   uninstalled
     *   failed
     *
     * @example heartOk
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description The ID of the ECS instance on which the shipper is installed.
     *
     * @example i-bp13y63575oypr9d****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentStatus' => 'agentStatus',
        'instanceId'  => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['agentStatus'] = $this->agentStatus;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentStatus'])) {
            $model->agentStatus = $map['agentStatus'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
