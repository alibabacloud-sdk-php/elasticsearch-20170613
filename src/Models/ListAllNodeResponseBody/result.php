<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAllNodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The disk usage.
     *
     * @example 4.2%
     *
     * @var string
     */
    public $cpuPercent;

    /**
     * @description The health status of the node. Valid values: GREEN, YELLOW, RED, and GRAY.
     *
     * @example 1.0%
     *
     * @var string
     */
    public $diskUsedPercent;

    /**
     * @example GREEN
     *
     * @var string
     */
    public $health;

    /**
     * @description The IP address of the node.
     *
     * @example 21.6%
     *
     * @var string
     */
    public $heapPercent;

    /**
     * @description The port that is used to connect to the node.
     *
     * @example 10.15.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @example 0.12
     *
     * @var string
     */
    public $loadOneM;

    /**
     * @description The 1-minute load of the node.
     *
     * @example WORKER
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 9200
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the nodes. Valid values:
     *
     *   MASTER: dedicated master node
     *   WORKER: hot node
     *   WORKER_WARM: warm node
     *   COORDINATING: client node
     *   KIBANA: Kibana node
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cpuPercent'      => 'cpuPercent',
        'diskUsedPercent' => 'diskUsedPercent',
        'health'          => 'health',
        'heapPercent'     => 'heapPercent',
        'host'            => 'host',
        'loadOneM'        => 'loadOneM',
        'nodeType'        => 'nodeType',
        'port'            => 'port',
        'zoneId'          => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuPercent) {
            $res['cpuPercent'] = $this->cpuPercent;
        }
        if (null !== $this->diskUsedPercent) {
            $res['diskUsedPercent'] = $this->diskUsedPercent;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->heapPercent) {
            $res['heapPercent'] = $this->heapPercent;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->loadOneM) {
            $res['loadOneM'] = $this->loadOneM;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['cpuPercent'])) {
            $model->cpuPercent = $map['cpuPercent'];
        }
        if (isset($map['diskUsedPercent'])) {
            $model->diskUsedPercent = $map['diskUsedPercent'];
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['heapPercent'])) {
            $model->heapPercent = $map['heapPercent'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['loadOneM'])) {
            $model->loadOneM = $map['loadOneM'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
