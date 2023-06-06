<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Configuration settings for a coordination node
 *
 * Generated from protobuf message <code>Ydb.Coordination.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Initialized on creation, cannot be set
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    protected $path = '';
    /**
     * Period in milliseconds for self-checks (default 1 second)
     *
     * Generated from protobuf field <code>uint32 self_check_period_millis = 2;</code>
     */
    protected $self_check_period_millis = 0;
    /**
     * Grace period for sessions on leader change (default 10 seconds)
     *
     * Generated from protobuf field <code>uint32 session_grace_period_millis = 3;</code>
     */
    protected $session_grace_period_millis = 0;
    /**
     * Concistency mode for read operations
     *
     * Generated from protobuf field <code>.Ydb.Coordination.ConsistencyMode read_consistency_mode = 4;</code>
     */
    protected $read_consistency_mode = 0;
    /**
     * Consistency mode for attach operations
     *
     * Generated from protobuf field <code>.Ydb.Coordination.ConsistencyMode attach_consistency_mode = 5;</code>
     */
    protected $attach_consistency_mode = 0;
    /**
     * Rate limiter counters mode
     *
     * Generated from protobuf field <code>.Ydb.Coordination.RateLimiterCountersMode rate_limiter_counters_mode = 6;</code>
     */
    protected $rate_limiter_counters_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           Initialized on creation, cannot be set
     *     @type int $self_check_period_millis
     *           Period in milliseconds for self-checks (default 1 second)
     *     @type int $session_grace_period_millis
     *           Grace period for sessions on leader change (default 10 seconds)
     *     @type int $read_consistency_mode
     *           Concistency mode for read operations
     *     @type int $attach_consistency_mode
     *           Consistency mode for attach operations
     *     @type int $rate_limiter_counters_mode
     *           Rate limiter counters mode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Initialized on creation, cannot be set
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Initialized on creation, cannot be set
     *
     * Generated from protobuf field <code>string path = 1;</code>
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
     * Period in milliseconds for self-checks (default 1 second)
     *
     * Generated from protobuf field <code>uint32 self_check_period_millis = 2;</code>
     * @return int
     */
    public function getSelfCheckPeriodMillis()
    {
        return $this->self_check_period_millis;
    }

    /**
     * Period in milliseconds for self-checks (default 1 second)
     *
     * Generated from protobuf field <code>uint32 self_check_period_millis = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSelfCheckPeriodMillis($var)
    {
        GPBUtil::checkUint32($var);
        $this->self_check_period_millis = $var;

        return $this;
    }

    /**
     * Grace period for sessions on leader change (default 10 seconds)
     *
     * Generated from protobuf field <code>uint32 session_grace_period_millis = 3;</code>
     * @return int
     */
    public function getSessionGracePeriodMillis()
    {
        return $this->session_grace_period_millis;
    }

    /**
     * Grace period for sessions on leader change (default 10 seconds)
     *
     * Generated from protobuf field <code>uint32 session_grace_period_millis = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSessionGracePeriodMillis($var)
    {
        GPBUtil::checkUint32($var);
        $this->session_grace_period_millis = $var;

        return $this;
    }

    /**
     * Concistency mode for read operations
     *
     * Generated from protobuf field <code>.Ydb.Coordination.ConsistencyMode read_consistency_mode = 4;</code>
     * @return int
     */
    public function getReadConsistencyMode()
    {
        return $this->read_consistency_mode;
    }

    /**
     * Concistency mode for read operations
     *
     * Generated from protobuf field <code>.Ydb.Coordination.ConsistencyMode read_consistency_mode = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setReadConsistencyMode($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Coordination\ConsistencyMode::class);
        $this->read_consistency_mode = $var;

        return $this;
    }

    /**
     * Consistency mode for attach operations
     *
     * Generated from protobuf field <code>.Ydb.Coordination.ConsistencyMode attach_consistency_mode = 5;</code>
     * @return int
     */
    public function getAttachConsistencyMode()
    {
        return $this->attach_consistency_mode;
    }

    /**
     * Consistency mode for attach operations
     *
     * Generated from protobuf field <code>.Ydb.Coordination.ConsistencyMode attach_consistency_mode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAttachConsistencyMode($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Coordination\ConsistencyMode::class);
        $this->attach_consistency_mode = $var;

        return $this;
    }

    /**
     * Rate limiter counters mode
     *
     * Generated from protobuf field <code>.Ydb.Coordination.RateLimiterCountersMode rate_limiter_counters_mode = 6;</code>
     * @return int
     */
    public function getRateLimiterCountersMode()
    {
        return $this->rate_limiter_counters_mode;
    }

    /**
     * Rate limiter counters mode
     *
     * Generated from protobuf field <code>.Ydb.Coordination.RateLimiterCountersMode rate_limiter_counters_mode = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRateLimiterCountersMode($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Coordination\RateLimiterCountersMode::class);
        $this->rate_limiter_counters_mode = $var;

        return $this;
    }

}

