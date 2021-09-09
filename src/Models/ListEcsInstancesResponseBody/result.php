<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\collectors;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\ipAddress;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $cloudAssistantStatus;

    /**
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var ipAddress[]
     */
    public $ipAddress;

    /**
     * @var collectors[]
     */
    public $collectors;
    protected $_name = [
        'cloudAssistantStatus' => 'cloudAssistantStatus',
        'ecsInstanceName'      => 'ecsInstanceName',
        'ecsInstanceId'        => 'ecsInstanceId',
        'tags'                 => 'tags',
        'osType'               => 'osType',
        'status'               => 'status',
        'ipAddress'            => 'ipAddress',
        'collectors'           => 'collectors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssistantStatus) {
            $res['cloudAssistantStatus'] = $this->cloudAssistantStatus;
        }
        if (null !== $this->ecsInstanceName) {
            $res['ecsInstanceName'] = $this->ecsInstanceName;
        }
        if (null !== $this->ecsInstanceId) {
            $res['ecsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->osType) {
            $res['osType'] = $this->osType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->ipAddress) {
            $res['ipAddress'] = [];
            if (null !== $this->ipAddress && \is_array($this->ipAddress)) {
                $n = 0;
                foreach ($this->ipAddress as $item) {
                    $res['ipAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->collectors) {
            $res['collectors'] = [];
            if (null !== $this->collectors && \is_array($this->collectors)) {
                $n = 0;
                foreach ($this->collectors as $item) {
                    $res['collectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['cloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['cloudAssistantStatus'];
        }
        if (isset($map['ecsInstanceName'])) {
            $model->ecsInstanceName = $map['ecsInstanceName'];
        }
        if (isset($map['ecsInstanceId'])) {
            $model->ecsInstanceId = $map['ecsInstanceId'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['osType'])) {
            $model->osType = $map['osType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['ipAddress'])) {
            if (!empty($map['ipAddress'])) {
                $model->ipAddress = [];
                $n                = 0;
                foreach ($map['ipAddress'] as $item) {
                    $model->ipAddress[$n++] = null !== $item ? ipAddress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['collectors'])) {
            if (!empty($map['collectors'])) {
                $model->collectors = [];
                $n                 = 0;
                foreach ($map['collectors'] as $item) {
                    $model->collectors[$n++] = null !== $item ? collectors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
