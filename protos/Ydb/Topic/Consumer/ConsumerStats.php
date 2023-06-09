<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\Consumer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Topic.Consumer.ConsumerStats</code>
 */
class ConsumerStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Minimal timestamp of last read from partitions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp min_partitions_last_read_time = 1;</code>
     */
    protected $min_partitions_last_read_time = null;
    /**
     * Maximum of differences between timestamp of read and write timestamp for all messages, read during last minute.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_read_time_lag = 2;</code>
     */
    protected $max_read_time_lag = null;
    /**
     * Maximum of differences between write timestamp and create timestamp for all messages, read during last minute.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_write_time_lag = 3;</code>
     */
    protected $max_write_time_lag = null;
    /**
     * Bytes read stastics.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MultipleWindowsStat bytes_read = 4;</code>
     */
    protected $bytes_read = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $min_partitions_last_read_time
     *           Minimal timestamp of last read from partitions.
     *     @type \Google\Protobuf\Duration $max_read_time_lag
     *           Maximum of differences between timestamp of read and write timestamp for all messages, read during last minute.
     *     @type \Google\Protobuf\Duration $max_write_time_lag
     *           Maximum of differences between write timestamp and create timestamp for all messages, read during last minute.
     *     @type \Ydb\Topic\MultipleWindowsStat $bytes_read
     *           Bytes read stastics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Minimal timestamp of last read from partitions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp min_partitions_last_read_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMinPartitionsLastReadTime()
    {
        return $this->min_partitions_last_read_time;
    }

    public function hasMinPartitionsLastReadTime()
    {
        return isset($this->min_partitions_last_read_time);
    }

    public function clearMinPartitionsLastReadTime()
    {
        unset($this->min_partitions_last_read_time);
    }

    /**
     * Minimal timestamp of last read from partitions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp min_partitions_last_read_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMinPartitionsLastReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->min_partitions_last_read_time = $var;

        return $this;
    }

    /**
     * Maximum of differences between timestamp of read and write timestamp for all messages, read during last minute.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_read_time_lag = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxReadTimeLag()
    {
        return $this->max_read_time_lag;
    }

    public function hasMaxReadTimeLag()
    {
        return isset($this->max_read_time_lag);
    }

    public function clearMaxReadTimeLag()
    {
        unset($this->max_read_time_lag);
    }

    /**
     * Maximum of differences between timestamp of read and write timestamp for all messages, read during last minute.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_read_time_lag = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxReadTimeLag($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_read_time_lag = $var;

        return $this;
    }

    /**
     * Maximum of differences between write timestamp and create timestamp for all messages, read during last minute.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_write_time_lag = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxWriteTimeLag()
    {
        return $this->max_write_time_lag;
    }

    public function hasMaxWriteTimeLag()
    {
        return isset($this->max_write_time_lag);
    }

    public function clearMaxWriteTimeLag()
    {
        unset($this->max_write_time_lag);
    }

    /**
     * Maximum of differences between write timestamp and create timestamp for all messages, read during last minute.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_write_time_lag = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxWriteTimeLag($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_write_time_lag = $var;

        return $this;
    }

    /**
     * Bytes read stastics.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MultipleWindowsStat bytes_read = 4;</code>
     * @return \Ydb\Topic\MultipleWindowsStat|null
     */
    public function getBytesRead()
    {
        return $this->bytes_read;
    }

    public function hasBytesRead()
    {
        return isset($this->bytes_read);
    }

    public function clearBytesRead()
    {
        unset($this->bytes_read);
    }

    /**
     * Bytes read stastics.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MultipleWindowsStat bytes_read = 4;</code>
     * @param \Ydb\Topic\MultipleWindowsStat $var
     * @return $this
     */
    public function setBytesRead($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\MultipleWindowsStat::class);
        $this->bytes_read = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConsumerStats::class, \Ydb\Topic\Consumer_ConsumerStats::class);

