<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateLogstashRequest;

use AlibabaCloud\Tea\Model;

class paymentInfo extends Model
{
    /**
     * @description 自动续费包月周期
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description 包月周期
     *
     * @var int
     */
    public $duration;

    /**
     * @description 是否自动续费
     *
     * @var bool
     */
    public $isAutoRenew;

    /**
     * @description 日期单位
     *
     * @var string
     */
    public $pricingCycle;
    protected $_name = [
        'autoRenewDuration' => 'autoRenewDuration',
        'duration'          => 'duration',
        'isAutoRenew'       => 'isAutoRenew',
        'pricingCycle'      => 'pricingCycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewDuration) {
            $res['autoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->isAutoRenew) {
            $res['isAutoRenew'] = $this->isAutoRenew;
        }
        if (null !== $this->pricingCycle) {
            $res['pricingCycle'] = $this->pricingCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paymentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRenewDuration'])) {
            $model->autoRenewDuration = $map['autoRenewDuration'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['isAutoRenew'])) {
            $model->isAutoRenew = $map['isAutoRenew'];
        }
        if (isset($map['pricingCycle'])) {
            $model->pricingCycle = $map['pricingCycle'];
        }

        return $model;
    }
}
