<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describe topic's consumer result message that will be inside DescribeConsumerResponse.operation.
 *
 * Generated from protobuf message <code>Ydb.Topic.DescribeConsumerResult</code>
 */
class DescribeConsumerResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Description of scheme object.
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     */
    protected $self = null;
    /**
     * Generated from protobuf field <code>.Ydb.Topic.Consumer consumer = 2;</code>
     */
    protected $consumer = null;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Topic.DescribeConsumerResult.PartitionInfo partitions = 3;</code>
     */
    private $partitions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Scheme\Entry $self
     *           Description of scheme object.
     *     @type \Ydb\Topic\Consumer $consumer
     *     @type array<\Ydb\Topic\DescribeConsumerResult\PartitionInfo>|\Google\Protobuf\Internal\RepeatedField $partitions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Description of scheme object.
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     * @return \Ydb\Scheme\Entry|null
     */
    public function getSelf()
    {
        return $this->self;
    }

    public function hasSelf()
    {
        return isset($this->self);
    }

    public function clearSelf()
    {
        unset($this->self);
    }

    /**
     * Description of scheme object.
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     * @param \Ydb\Scheme\Entry $var
     * @return $this
     */
    public function setSelf($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Scheme\Entry::class);
        $this->self = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.Consumer consumer = 2;</code>
     * @return \Ydb\Topic\Consumer|null
     */
    public function getConsumer()
    {
        return $this->consumer;
    }

    public function hasConsumer()
    {
        return isset($this->consumer);
    }

    public function clearConsumer()
    {
        unset($this->consumer);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.Consumer consumer = 2;</code>
     * @param \Ydb\Topic\Consumer $var
     * @return $this
     */
    public function setConsumer($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\Consumer::class);
        $this->consumer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Topic.DescribeConsumerResult.PartitionInfo partitions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitions()
    {
        return $this->partitions;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Topic.DescribeConsumerResult.PartitionInfo partitions = 3;</code>
     * @param array<\Ydb\Topic\DescribeConsumerResult\PartitionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Topic\DescribeConsumerResult\PartitionInfo::class);
        $this->partitions = $arr;

        return $this;
    }

}

