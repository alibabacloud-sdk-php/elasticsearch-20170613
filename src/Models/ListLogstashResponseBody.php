<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody\headers;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListLogstashResponseBody extends Model
{
    /**
     * @description The billing method of the instance. Supported: prepaid (subscription) and postpaid (pay-as-you-go).
     *
     * @var headers
     */
    public $headers;

    /**
     * @description Detailed information about the matching instances.
     *
     * @example AC442F2F-5068-4434-AA21-E78947A9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the VPC.
     *
     * @var result[]
     */
    public $result;
    protected $_name = [
        'headers'   => 'Headers',
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogstashResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
