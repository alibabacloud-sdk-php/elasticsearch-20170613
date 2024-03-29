<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class InterruptLogstashTaskResponseBody extends Model
{
    /**
     * @description The error code returned. If the API operation is successfully called, this parameter is not returned.
     *
     * @example .
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned. If the API operation is successfully called, this parameter is not returned.
     *
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 0FA05123-745C-42FD-A69B-AFF48EF9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the task is suspended. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InterruptLogstashTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
