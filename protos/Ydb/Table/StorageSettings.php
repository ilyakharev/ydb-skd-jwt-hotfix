<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.StorageSettings</code>
 */
class StorageSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * This specifies internal channel 0 commit log storage pool
     * Fastest available storage recommended, negligible amounts of short-lived data
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool tablet_commit_log0 = 1;</code>
     */
    protected $tablet_commit_log0 = null;
    /**
     * This specifies internal channel 1 commit log storage pool
     * Fastest available storage recommended, small amounts of short-lived data
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool tablet_commit_log1 = 2;</code>
     */
    protected $tablet_commit_log1 = null;
    /**
     * This specifies external blobs storage pool
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool external = 4;</code>
     */
    protected $external = null;
    /**
     * Optionally store large values in "external blobs"
     * WARNING: DO NOT USE
     * This feature is experimental and should not be used, restrictions apply:
     * * Table cannot split/merge when this is enabled
     * * Table cannot be copied or backed up when this is enabled
     * * This feature cannot be disabled once enabled for a table
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status store_external_blobs = 5;</code>
     */
    protected $store_external_blobs = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Table\StoragePool $tablet_commit_log0
     *           This specifies internal channel 0 commit log storage pool
     *           Fastest available storage recommended, negligible amounts of short-lived data
     *     @type \Ydb\Table\StoragePool $tablet_commit_log1
     *           This specifies internal channel 1 commit log storage pool
     *           Fastest available storage recommended, small amounts of short-lived data
     *     @type \Ydb\Table\StoragePool $external
     *           This specifies external blobs storage pool
     *     @type int $store_external_blobs
     *           Optionally store large values in "external blobs"
     *           WARNING: DO NOT USE
     *           This feature is experimental and should not be used, restrictions apply:
     *           * Table cannot split/merge when this is enabled
     *           * Table cannot be copied or backed up when this is enabled
     *           * This feature cannot be disabled once enabled for a table
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * This specifies internal channel 0 commit log storage pool
     * Fastest available storage recommended, negligible amounts of short-lived data
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool tablet_commit_log0 = 1;</code>
     * @return \Ydb\Table\StoragePool|null
     */
    public function getTabletCommitLog0()
    {
        return $this->tablet_commit_log0;
    }

    public function hasTabletCommitLog0()
    {
        return isset($this->tablet_commit_log0);
    }

    public function clearTabletCommitLog0()
    {
        unset($this->tablet_commit_log0);
    }

    /**
     * This specifies internal channel 0 commit log storage pool
     * Fastest available storage recommended, negligible amounts of short-lived data
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool tablet_commit_log0 = 1;</code>
     * @param \Ydb\Table\StoragePool $var
     * @return $this
     */
    public function setTabletCommitLog0($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\StoragePool::class);
        $this->tablet_commit_log0 = $var;

        return $this;
    }

    /**
     * This specifies internal channel 1 commit log storage pool
     * Fastest available storage recommended, small amounts of short-lived data
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool tablet_commit_log1 = 2;</code>
     * @return \Ydb\Table\StoragePool|null
     */
    public function getTabletCommitLog1()
    {
        return $this->tablet_commit_log1;
    }

    public function hasTabletCommitLog1()
    {
        return isset($this->tablet_commit_log1);
    }

    public function clearTabletCommitLog1()
    {
        unset($this->tablet_commit_log1);
    }

    /**
     * This specifies internal channel 1 commit log storage pool
     * Fastest available storage recommended, small amounts of short-lived data
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool tablet_commit_log1 = 2;</code>
     * @param \Ydb\Table\StoragePool $var
     * @return $this
     */
    public function setTabletCommitLog1($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\StoragePool::class);
        $this->tablet_commit_log1 = $var;

        return $this;
    }

    /**
     * This specifies external blobs storage pool
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool external = 4;</code>
     * @return \Ydb\Table\StoragePool|null
     */
    public function getExternal()
    {
        return $this->external;
    }

    public function hasExternal()
    {
        return isset($this->external);
    }

    public function clearExternal()
    {
        unset($this->external);
    }

    /**
     * This specifies external blobs storage pool
     *
     * Generated from protobuf field <code>.Ydb.Table.StoragePool external = 4;</code>
     * @param \Ydb\Table\StoragePool $var
     * @return $this
     */
    public function setExternal($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\StoragePool::class);
        $this->external = $var;

        return $this;
    }

    /**
     * Optionally store large values in "external blobs"
     * WARNING: DO NOT USE
     * This feature is experimental and should not be used, restrictions apply:
     * * Table cannot split/merge when this is enabled
     * * Table cannot be copied or backed up when this is enabled
     * * This feature cannot be disabled once enabled for a table
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status store_external_blobs = 5;</code>
     * @return int
     */
    public function getStoreExternalBlobs()
    {
        return $this->store_external_blobs;
    }

    /**
     * Optionally store large values in "external blobs"
     * WARNING: DO NOT USE
     * This feature is experimental and should not be used, restrictions apply:
     * * Table cannot split/merge when this is enabled
     * * Table cannot be copied or backed up when this is enabled
     * * This feature cannot be disabled once enabled for a table
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status store_external_blobs = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStoreExternalBlobs($var)
    {
        GPBUtil::checkEnum($var, \Ydb\FeatureFlag\Status::class);
        $this->store_external_blobs = $var;

        return $this;
    }

}

