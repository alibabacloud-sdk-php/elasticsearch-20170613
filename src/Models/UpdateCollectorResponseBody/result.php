<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorResponseBody\result\configs;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorResponseBody\result\extendConfigs;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $collectorPaths;

    /**
     * @description The information about the configuration file for the shipper.
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description Indicates whether the shipper is checked and updated. Valid values:
     *
     *   true: The shipper is only checked.
     *   false: The shipper is checked and updated.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The extended parameters that are configured for the shipper.
     *
     * @var extendConfigs[]
     */
    public $extendConfigs;

    /**
     * @description The time when the shipper was created.
     *
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @description The time when the shipper was updated.
     *
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @description The name of the shipper.
     *
     * @example ct-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The account ID.
     *
     * @example 16852099488*****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The shipper ID.
     *
     * @example ct-cn-0v3xj86085dvq****
     *
     * @var string
     */
    public $resId;

    /**
     * @description The type of the shipper. Valid values: fileBeat, metricBeat, heartBeat, and auditBeat.
     *
     * @example fileBeat
     *
     * @var string
     */
    public $resType;

    /**
     * @description The version of the shipper.
     *
     * @example 6.8.5_with_community
     *
     * @var string
     */
    public $resVersion;

    /**
     * @description The status of the shipper. Valid values:
     *
     *   activing: The shipper is being initialized.
     *   active: The shipper is in effect.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VPC in which the shipper resides.
     *
     * @example vpc-bp16k1dvzxtma*****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'collectorPaths' => 'collectorPaths',
        'configs'        => 'configs',
        'dryRun'         => 'dryRun',
        'extendConfigs'  => 'extendConfigs',
        'gmtCreatedTime' => 'gmtCreatedTime',
        'gmtUpdateTime'  => 'gmtUpdateTime',
        'name'           => 'name',
        'ownerId'        => 'ownerId',
        'resId'          => 'resId',
        'resType'        => 'resType',
        'resVersion'     => 'resVersion',
        'status'         => 'status',
        'vpcId'          => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectorPaths) {
            $res['collectorPaths'] = $this->collectorPaths;
        }
        if (null !== $this->configs) {
            $res['configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }
        if (null !== $this->extendConfigs) {
            $res['extendConfigs'] = [];
            if (null !== $this->extendConfigs && \is_array($this->extendConfigs)) {
                $n = 0;
                foreach ($this->extendConfigs as $item) {
                    $res['extendConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreatedTime) {
            $res['gmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtUpdateTime) {
            $res['gmtUpdateTime'] = $this->gmtUpdateTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }
        if (null !== $this->resId) {
            $res['resId'] = $this->resId;
        }
        if (null !== $this->resType) {
            $res['resType'] = $this->resType;
        }
        if (null !== $this->resVersion) {
            $res['resVersion'] = $this->resVersion;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['collectorPaths'])) {
            if (!empty($map['collectorPaths'])) {
                $model->collectorPaths = $map['collectorPaths'];
            }
        }
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }
        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = [];
                $n                    = 0;
                foreach ($map['extendConfigs'] as $item) {
                    $model->extendConfigs[$n++] = null !== $item ? extendConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['gmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['gmtCreatedTime'];
        }
        if (isset($map['gmtUpdateTime'])) {
            $model->gmtUpdateTime = $map['gmtUpdateTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }
        if (isset($map['resId'])) {
            $model->resId = $map['resId'];
        }
        if (isset($map['resType'])) {
            $model->resType = $map['resType'];
        }
        if (isset($map['resVersion'])) {
            $model->resVersion = $map['resVersion'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
