<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateLogstashRequest\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateLogstashRequest\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateLogstashRequest\paymentInfo;
use AlibabaCloud\Tea\Model;

class CreateLogstashRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @var paymentInfo
     */
    public $paymentInfo;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'description'   => 'description',
        'networkConfig' => 'networkConfig',
        'nodeAmount'    => 'nodeAmount',
        'nodeSpec'      => 'nodeSpec',
        'paymentInfo'   => 'paymentInfo',
        'paymentType'   => 'paymentType',
        'version'       => 'version',
        'clientToken'   => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->paymentInfo) {
            $res['paymentInfo'] = null !== $this->paymentInfo ? $this->paymentInfo->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLogstashRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }
        if (isset($map['paymentInfo'])) {
            $model->paymentInfo = paymentInfo::fromMap($map['paymentInfo']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
