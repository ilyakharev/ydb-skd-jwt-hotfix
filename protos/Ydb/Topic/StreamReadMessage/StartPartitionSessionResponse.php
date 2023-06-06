<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Signal for server that cient is ready to recive data for partition.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.StartPartitionSessionResponse</code>
 */
class StartPartitionSessionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Partition session identifier of partition to start read.
     *
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     */
    protected $partition_session_id = 0;
    /**
     * Reads in this partition session will start from offset no less than read_offset.
     * If read_offset is set, server will check that read_offset is no less that actual committed offset.
     * If check fails then server will send an error message (status != SUCCESS) and close stream.
     * If read_offset is not set, no check will be made.
     * InitRequest.max_lag and InitRequest.read_from could lead to skip of more messages.
     * Server will return data starting from offset that is maximum of actual committed offset, read_offset (if set)
     * and offsets calculated from InitRequest.max_lag and InitRequest.read_from.
     *
     * Generated from protobuf field <code>optional int64 read_offset = 2;</code>
     */
    protected $read_offset = null;
    /**
     * All messages with offset less than commit_offset are processed by client.
     * Server will commit this position if this is not done yet.
     *
     * Generated from protobuf field <code>optional int64 commit_offset = 3;</code>
     */
    protected $commit_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_session_id
     *           Partition session identifier of partition to start read.
     *     @type int|string $read_offset
     *           Reads in this partition session will start from offset no less than read_offset.
     *           If read_offset is set, server will check that read_offset is no less that actual committed offset.
     *           If check fails then server will send an error message (status != SUCCESS) and close stream.
     *           If read_offset is not set, no check will be made.
     *           InitRequest.max_lag and InitRequest.read_from could lead to skip of more messages.
     *           Server will return data starting from offset that is maximum of actual committed offset, read_offset (if set)
     *           and offsets calculated from InitRequest.max_lag and InitRequest.read_from.
     *     @type int|string $commit_offset
     *           All messages with offset less than commit_offset are processed by client.
     *           Server will commit this position if this is not done yet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Partition session identifier of partition to start read.
     *
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     * @return int|string
     */
    public function getPartitionSessionId()
    {
        return $this->partition_session_id;
    }

    /**
     * Partition session identifier of partition to start read.
     *
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionSessionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_session_id = $var;

        return $this;
    }

    /**
     * Reads in this partition session will start from offset no less than read_offset.
     * If read_offset is set, server will check that read_offset is no less that actual committed offset.
     * If check fails then server will send an error message (status != SUCCESS) and close stream.
     * If read_offset is not set, no check will be made.
     * InitRequest.max_lag and InitRequest.read_from could lead to skip of more messages.
     * Server will return data starting from offset that is maximum of actual committed offset, read_offset (if set)
     * and offsets calculated from InitRequest.max_lag and InitRequest.read_from.
     *
     * Generated from protobuf field <code>optional int64 read_offset = 2;</code>
     * @return int|string
     */
    public function getReadOffset()
    {
        return isset($this->read_offset) ? $this->read_offset : 0;
    }

    public function hasReadOffset()
    {
        return isset($this->read_offset);
    }

    public function clearReadOffset()
    {
        unset($this->read_offset);
    }

    /**
     * Reads in this partition session will start from offset no less than read_offset.
     * If read_offset is set, server will check that read_offset is no less that actual committed offset.
     * If check fails then server will send an error message (status != SUCCESS) and close stream.
     * If read_offset is not set, no check will be made.
     * InitRequest.max_lag and InitRequest.read_from could lead to skip of more messages.
     * Server will return data starting from offset that is maximum of actual committed offset, read_offset (if set)
     * and offsets calculated from InitRequest.max_lag and InitRequest.read_from.
     *
     * Generated from protobuf field <code>optional int64 read_offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReadOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->read_offset = $var;

        return $this;
    }

    /**
     * All messages with offset less than commit_offset are processed by client.
     * Server will commit this position if this is not done yet.
     *
     * Generated from protobuf field <code>optional int64 commit_offset = 3;</code>
     * @return int|string
     */
    public function getCommitOffset()
    {
        return isset($this->commit_offset) ? $this->commit_offset : 0;
    }

    public function hasCommitOffset()
    {
        return isset($this->commit_offset);
    }

    public function clearCommitOffset()
    {
        unset($this->commit_offset);
    }

    /**
     * All messages with offset less than commit_offset are processed by client.
     * Server will commit this position if this is not done yet.
     *
     * Generated from protobuf field <code>optional int64 commit_offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommitOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->commit_offset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StartPartitionSessionResponse::class, \Ydb\Topic\StreamReadMessage_StartPartitionSessionResponse::class);
