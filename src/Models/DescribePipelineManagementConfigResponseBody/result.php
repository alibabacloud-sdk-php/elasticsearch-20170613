<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineManagementConfigResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The access addresses of the Elasticsearch cluster. Specify each address in the `http://Endpoint of the Elasticsearch cluster:Port number` format.
     *
     * @example ["http://es-cn-n6w1o1x0w001c****.elasticsearch.aliyuncs.com:9200"]
     *
     * @var string
     */
    public $endpoints;

    /**
     * @description The ID of the Elasticsearch cluster.
     *
     * @example es-cn-n6w1o1x0w001c****
     *
     * @var string
     */
    public $esInstanceId;

    /**
     * @var string[]
     */
    public $pipelineIds;

    /**
     * @description The pipeline management method. Valid values: Kibana and MULTIPLE_PIPELINE.
     *
     * @example MULTIPLE_PIPELINE
     *
     * @var string
     */
    public $pipelineManagementType;

    /**
     * @description The username that is used to access the Elasticsearch cluster.
     *
     * @example elastic
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'endpoints'              => 'endpoints',
        'esInstanceId'           => 'esInstanceId',
        'pipelineIds'            => 'pipelineIds',
        'pipelineManagementType' => 'pipelineManagementType',
        'userName'               => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoints) {
            $res['endpoints'] = $this->endpoints;
        }
        if (null !== $this->esInstanceId) {
            $res['esInstanceId'] = $this->esInstanceId;
        }
        if (null !== $this->pipelineIds) {
            $res['pipelineIds'] = $this->pipelineIds;
        }
        if (null !== $this->pipelineManagementType) {
            $res['pipelineManagementType'] = $this->pipelineManagementType;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['endpoints'])) {
            $model->endpoints = $map['endpoints'];
        }
        if (isset($map['esInstanceId'])) {
            $model->esInstanceId = $map['esInstanceId'];
        }
        if (isset($map['pipelineIds'])) {
            if (!empty($map['pipelineIds'])) {
                $model->pipelineIds = $map['pipelineIds'];
            }
        }
        if (isset($map['pipelineManagementType'])) {
            $model->pipelineManagementType = $map['pipelineManagementType'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
