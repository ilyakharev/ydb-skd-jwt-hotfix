<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_monitoring.proto

namespace Ydb\Monitoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Monitoring.LocationStorageGroup</code>
 */
class LocationStorageGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationStorageVDisk vdisk = 2;</code>
     */
    protected $vdisk = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Ydb\Monitoring\LocationStorageVDisk $vdisk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated string id = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationStorageVDisk vdisk = 2;</code>
     * @return \Ydb\Monitoring\LocationStorageVDisk|null
     */
    public function getVdisk()
    {
        return $this->vdisk;
    }

    public function hasVdisk()
    {
        return isset($this->vdisk);
    }

    public function clearVdisk()
    {
        unset($this->vdisk);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationStorageVDisk vdisk = 2;</code>
     * @param \Ydb\Monitoring\LocationStorageVDisk $var
     * @return $this
     */
    public function setVdisk($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Monitoring\LocationStorageVDisk::class);
        $this->vdisk = $var;

        return $this;
    }

}

