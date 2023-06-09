<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Signal for server that client processed some read data.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.CommitOffsetRequest</code>
 */
class CommitOffsetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Partition offsets that indicates processed data.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.StreamReadMessage.CommitOffsetRequest.PartitionCommitOffset commit_offsets = 1;</code>
     */
    private $commit_offsets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Ydb\Topic\StreamReadMessage\CommitOffsetRequest\PartitionCommitOffset>|\Google\Protobuf\Internal\RepeatedField $commit_offsets
     *           Partition offsets that indicates processed data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Partition offsets that indicates processed data.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.StreamReadMessage.CommitOffsetRequest.PartitionCommitOffset commit_offsets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommitOffsets()
    {
        return $this->commit_offsets;
    }

    /**
     * Partition offsets that indicates processed data.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.StreamReadMessage.CommitOffsetRequest.PartitionCommitOffset commit_offsets = 1;</code>
     * @param array<\Ydb\Topic\StreamReadMessage\CommitOffsetRequest\PartitionCommitOffset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommitOffsets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Topic\StreamReadMessage\CommitOffsetRequest\PartitionCommitOffset::class);
        $this->commit_offsets = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommitOffsetRequest::class, \Ydb\Topic\StreamReadMessage_CommitOffsetRequest::class);

