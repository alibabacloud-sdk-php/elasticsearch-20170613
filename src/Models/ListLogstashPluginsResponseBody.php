<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashPluginsResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListLogstashPluginsResponseBody extends Model
{
    /**
     * @description The address of the documentation for the plug-in.
     *
     * @example 99407AB-2FA9-489E-A259-40CF6DCC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the plug-in. Valid values:
     *
     *   INSTALLED: Installed
     *   UNINSTALLED: Not installed
     *   INSTALLING: The instance is being installed.
     *   UNINSTALLING: The instance is being uninstalled.
     *   UPGRADING: The backup gateway is being upgraded.
     *   FAILED: Installation failed
     *   UNKNOWN: The cluster is lost and cannot be created.
     *
     * @var result[]
     */
    public $result;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return ListLogstashPluginsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
