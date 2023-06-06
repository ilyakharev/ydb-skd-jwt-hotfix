<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Within a StreamRead session delivered messages are separated by partition.
 * Reads from a single partition are represented by a partition session.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.PartitionSession</code>
 */
class PartitionSession extends \Google\Protobuf\Internal\Message
{
    /**
     * Identitifier of partition session. Unique inside one RPC call.
     *
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     */
    protected $partition_session_id = 0;
    /**
     * Topic path of partition.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';
    /**
     * Partition identifier.
     *
     * Generated from protobuf field <code>int64 partition_id = 3;</code>
     */
    protected $partition_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_session_id
     *           Identitifier of partition session. Unique inside one RPC call.
     *     @type string $path
     *           Topic path of partition.
     *     @type int|string $partition_id
     *           Partition identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Identitifier of partition session. Unique inside one RPC call.
     *
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     * @return int|string
     */
    public function getPartitionSessionId()
    {
        return $this->partition_session_id;
    }

    /**
     * Identitifier of partition session. Unique inside one RPC call.
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
     * Topic path of partition.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Topic path of partition.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Partition identifier.
     *
     * Generated from protobuf field <code>int64 partition_id = 3;</code>
     * @return int|string
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    /**
     * Partition identifier.
     *
     * Generated from protobuf field <code>int64 partition_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionSession::class, \Ydb\Topic\StreamReadMessage_PartitionSession::class);

