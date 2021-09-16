<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $isManaged;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $managedStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $health;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $ilmExplain;
    protected $_name = [
        'isManaged'     => 'isManaged',
        'createTime'    => 'createTime',
        'size'          => 'size',
        'managedStatus' => 'managedStatus',
        'name'          => 'name',
        'health'        => 'health',
        'phase'         => 'phase',
        'ilmExplain'    => 'ilmExplain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isManaged) {
            $res['isManaged'] = $this->isManaged;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->managedStatus) {
            $res['managedStatus'] = $this->managedStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->ilmExplain) {
            $res['ilmExplain'] = $this->ilmExplain;
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
        if (isset($map['isManaged'])) {
            $model->isManaged = $map['isManaged'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['managedStatus'])) {
            $model->managedStatus = $map['managedStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['ilmExplain'])) {
            $model->ilmExplain = $map['ilmExplain'];
        }

        return $model;
    }
}
