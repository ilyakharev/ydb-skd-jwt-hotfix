<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamWriteMessage\WriteResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message with write statistics.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamWriteMessage.WriteResponse.WriteStatistics</code>
 */
class WriteStatistics extends \Google\Protobuf\Internal\Message
{
    /**
     * Time spent in persisting of data. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration persisting_time = 1;</code>
     */
    protected $persisting_time = null;
    /**
     * Time spent in queue before persisting, minimal of all messages in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_queue_wait_time = 2;</code>
     */
    protected $min_queue_wait_time = null;
    /**
     * Time spent in queue before persisting, maximal of all messages in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_queue_wait_time = 3;</code>
     */
    protected $max_queue_wait_time = null;
    /**
     * Time spent awaiting for partition write quota. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration partition_quota_wait_time = 4;</code>
     */
    protected $partition_quota_wait_time = null;
    /**
     * Time spent awaiting for topic write quota. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration topic_quota_wait_time = 5;</code>
     */
    protected $topic_quota_wait_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $persisting_time
     *           Time spent in persisting of data. Same for each message in response.
     *     @type \Google\Protobuf\Duration $min_queue_wait_time
     *           Time spent in queue before persisting, minimal of all messages in response.
     *     @type \Google\Protobuf\Duration $max_queue_wait_time
     *           Time spent in queue before persisting, maximal of all messages in response.
     *     @type \Google\Protobuf\Duration $partition_quota_wait_time
     *           Time spent awaiting for partition write quota. Same for each message in response.
     *     @type \Google\Protobuf\Duration $topic_quota_wait_time
     *           Time spent awaiting for topic write quota. Same for each message in response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Time spent in persisting of data. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration persisting_time = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPersistingTime()
    {
        return $this->persisting_time;
    }

    public function hasPersistingTime()
    {
        return isset($this->persisting_time);
    }

    public function clearPersistingTime()
    {
        unset($this->persisting_time);
    }

    /**
     * Time spent in persisting of data. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration persisting_time = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPersistingTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->persisting_time = $var;

        return $this;
    }

    /**
     * Time spent in queue before persisting, minimal of all messages in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_queue_wait_time = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinQueueWaitTime()
    {
        return $this->min_queue_wait_time;
    }

    public function hasMinQueueWaitTime()
    {
        return isset($this->min_queue_wait_time);
    }

    public function clearMinQueueWaitTime()
    {
        unset($this->min_queue_wait_time);
    }

    /**
     * Time spent in queue before persisting, minimal of all messages in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_queue_wait_time = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinQueueWaitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_queue_wait_time = $var;

        return $this;
    }

    /**
     * Time spent in queue before persisting, maximal of all messages in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_queue_wait_time = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxQueueWaitTime()
    {
        return $this->max_queue_wait_time;
    }

    public function hasMaxQueueWaitTime()
    {
        return isset($this->max_queue_wait_time);
    }

    public function clearMaxQueueWaitTime()
    {
        unset($this->max_queue_wait_time);
    }

    /**
     * Time spent in queue before persisting, maximal of all messages in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_queue_wait_time = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxQueueWaitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_queue_wait_time = $var;

        return $this;
    }

    /**
     * Time spent awaiting for partition write quota. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration partition_quota_wait_time = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPartitionQuotaWaitTime()
    {
        return $this->partition_quota_wait_time;
    }

    public function hasPartitionQuotaWaitTime()
    {
        return isset($this->partition_quota_wait_time);
    }

    public function clearPartitionQuotaWaitTime()
    {
        unset($this->partition_quota_wait_time);
    }

    /**
     * Time spent awaiting for partition write quota. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration partition_quota_wait_time = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPartitionQuotaWaitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->partition_quota_wait_time = $var;

        return $this;
    }

    /**
     * Time spent awaiting for topic write quota. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration topic_quota_wait_time = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTopicQuotaWaitTime()
    {
        return $this->topic_quota_wait_time;
    }

    public function hasTopicQuotaWaitTime()
    {
        return isset($this->topic_quota_wait_time);
    }

    public function clearTopicQuotaWaitTime()
    {
        unset($this->topic_quota_wait_time);
    }

    /**
     * Time spent awaiting for topic write quota. Same for each message in response.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration topic_quota_wait_time = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTopicQuotaWaitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->topic_quota_wait_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WriteStatistics::class, \Ydb\Topic\StreamWriteMessage_WriteResponse_WriteStatistics::class);
