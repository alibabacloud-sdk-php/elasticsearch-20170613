<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineResponseBody\headers;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListPipelineResponseBody extends Model
{
    /**
     * @description The ID of the ApsaraVideo Media Processing (MPS) queue that is used to run the job.
     *
     * @var headers
     */
    public $headers;

    /**
     * @description The response.
     *
     * @example 5FFD9ED4-C2EC-4E89-B22B-1ACB6FE1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the pipeline was created.
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
     * @return ListPipelineResponseBody
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
