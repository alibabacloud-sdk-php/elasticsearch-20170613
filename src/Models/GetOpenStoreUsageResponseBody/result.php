<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetOpenStoreUsageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The current OpenStore storage capacity (estimated value based on actual indexes). Unit: Byte.
     *
     * @example 204800
     *
     * @var int
     */
    public $currentUsage;

    /**
     * @description The storage capacity of OpenStore yesterday. Unit: bytes.
     *
     * @example 184320
     *
     * @var int
     */
    public $lastDayUsage;
    protected $_name = [
        'currentUsage' => 'currentUsage',
        'lastDayUsage' => 'lastDayUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentUsage) {
            $res['currentUsage'] = $this->currentUsage;
        }
        if (null !== $this->lastDayUsage) {
            $res['lastDayUsage'] = $this->lastDayUsage;
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
        if (isset($map['currentUsage'])) {
            $model->currentUsage = $map['currentUsage'];
        }
        if (isset($map['lastDayUsage'])) {
            $model->lastDayUsage = $map['lastDayUsage'];
        }

        return $model;
    }
}
