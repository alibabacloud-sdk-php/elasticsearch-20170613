<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result\nodeSpec;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The private domain name of the instance.
     *
     * @example 2018-07-13T03:58:07.253Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description The configuration of data nodes.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance.
     *
     * @example es-cn-abc.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The node specifications.
     *
     * @example 5.5.3_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @description The storage space of the node. Unit: GB.
     *
     * @example es-cn-abc
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The size of the node storage space.
     *
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @description The storage space of the node. Unit: GB.
     *
     * @var masterConfiguration
     */
    public $masterConfiguration;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   prepaid: subscription
     *   postpaid: pay-as-you-go
     *
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @description The storage type of the node. Valid values:
     *
     *   cloud_ssd: standard SSD
     *   cloud_efficiency: ultra disk
     *
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @description The edition of the dedicated KMS instance.
     *
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The name of the instance.
     *
     * @example active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createdAt'           => 'createdAt',
        'description'         => 'description',
        'domain'              => 'domain',
        'esVersion'           => 'esVersion',
        'instanceId'          => 'instanceId',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'masterConfiguration' => 'masterConfiguration',
        'nodeAmount'          => 'nodeAmount',
        'nodeSpec'            => 'nodeSpec',
        'paymentType'         => 'paymentType',
        'status'              => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->kibanaConfiguration) {
            $res['kibanaConfiguration'] = null !== $this->kibanaConfiguration ? $this->kibanaConfiguration->toMap() : null;
        }
        if (null !== $this->masterConfiguration) {
            $res['masterConfiguration'] = null !== $this->masterConfiguration ? $this->masterConfiguration->toMap() : null;
        }
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['kibanaConfiguration'])) {
            $model->kibanaConfiguration = kibanaConfiguration::fromMap($map['kibanaConfiguration']);
        }
        if (isset($map['masterConfiguration'])) {
            $model->masterConfiguration = masterConfiguration::fromMap($map['masterConfiguration']);
        }
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
