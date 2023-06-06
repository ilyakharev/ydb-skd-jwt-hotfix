<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage\ReadResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of sequence of messages from one partition.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.ReadResponse.PartitionData</code>
 */
class PartitionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     */
    protected $partition_session_id = 0;
    /**
     * Client messages, divided by write sessions.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.StreamReadMessage.ReadResponse.Batch batches = 2;</code>
     */
    private $batches;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_session_id
     *     @type array<\Ydb\Topic\StreamReadMessage\ReadResponse\Batch>|\Google\Protobuf\Internal\RepeatedField $batches
     *           Client messages, divided by write sessions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     * @return int|string
     */
    public function getPartitionSessionId()
    {
        return $this->partition_session_id;
    }

    /**
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
     * Client messages, divided by write sessions.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.StreamReadMessage.ReadResponse.Batch batches = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBatches()
    {
        return $this->batches;
    }

    /**
     * Client messages, divided by write sessions.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.StreamReadMessage.ReadResponse.Batch batches = 2;</code>
     * @param array<\Ydb\Topic\StreamReadMessage\ReadResponse\Batch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Topic\StreamReadMessage\ReadResponse\Batch::class);
        $this->batches = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionData::class, \Ydb\Topic\StreamReadMessage_ReadResponse_PartitionData::class);

