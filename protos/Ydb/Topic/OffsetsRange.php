<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents range [start, end).
 * I.e. (end - 1) is the greatest of offsets, included in non-empty range.
 *
 * Generated from protobuf message <code>Ydb.Topic.OffsetsRange</code>
 */
class OffsetsRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 start = 1;</code>
     */
    protected $start = 0;
    /**
     * Generated from protobuf field <code>int64 end = 2;</code>
     */
    protected $end = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $start
     *     @type int|string $end
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 start = 1;</code>
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>int64 start = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end = 2;</code>
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>int64 end = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;

        return $this;
    }

}
