<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class masterConfiguration extends Model
{
    /**
     * @description The network type. Only Virtual Private Cloud (VPC) is supported.
     *
     * @example 3
     *
     * @var int
     */
    public $amount;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @description The configuration of data nodes.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The zone where the cluster resides.
     *
     * @example elasticsearch.sn2ne.large
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'amount'   => 'amount',
        'disk'     => 'disk',
        'diskType' => 'diskType',
        'spec'     => 'spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
