<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedLogstashRestartTimeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The unit.
     *
     * @example second
     *
     * @var string
     */
    public $unit;

    /**
     * @description The estimated restart time.
     *
     * @example 600
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'unit'  => 'unit',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
