<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination\SessionRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Used to describe semaphores and watch them for changes
 * WARNING: a describe operation will cancel previous watches on the same semaphore
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionRequest.DescribeSemaphore</code>
 */
class DescribeSemaphore extends \Google\Protobuf\Internal\Message
{
    /**
     * Client-defined request id, echoed in the response
     *
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     */
    protected $req_id = 0;
    /**
     * Name of the semaphore to describe
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Response will include owners list if true
     *
     * Generated from protobuf field <code>bool include_owners = 3;</code>
     */
    protected $include_owners = false;
    /**
     * Response will include waiters list if true
     *
     * Generated from protobuf field <code>bool include_waiters = 4;</code>
     */
    protected $include_waiters = false;
    /**
     * Watch for changes in semaphore data
     *
     * Generated from protobuf field <code>bool watch_data = 5;</code>
     */
    protected $watch_data = false;
    /**
     * Watch for changes in semaphore owners (including owners data)
     *
     * Generated from protobuf field <code>bool watch_owners = 6;</code>
     */
    protected $watch_owners = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $req_id
     *           Client-defined request id, echoed in the response
     *     @type string $name
     *           Name of the semaphore to describe
     *     @type bool $include_owners
     *           Response will include owners list if true
     *     @type bool $include_waiters
     *           Response will include waiters list if true
     *     @type bool $watch_data
     *           Watch for changes in semaphore data
     *     @type bool $watch_owners
     *           Watch for changes in semaphore owners (including owners data)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Client-defined request id, echoed in the response
     *
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     * @return int|string
     */
    public function getReqId()
    {
        return $this->req_id;
    }

    /**
     * Client-defined request id, echoed in the response
     *
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReqId($var)
    {
        GPBUtil::checkUint64($var);
        $this->req_id = $var;

        return $this;
    }

    /**
     * Name of the semaphore to describe
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the semaphore to describe
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Response will include owners list if true
     *
     * Generated from protobuf field <code>bool include_owners = 3;</code>
     * @return bool
     */
    public function getIncludeOwners()
    {
        return $this->include_owners;
    }

    /**
     * Response will include owners list if true
     *
     * Generated from protobuf field <code>bool include_owners = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeOwners($var)
    {
        GPBUtil::checkBool($var);
        $this->include_owners = $var;

        return $this;
    }

    /**
     * Response will include waiters list if true
     *
     * Generated from protobuf field <code>bool include_waiters = 4;</code>
     * @return bool
     */
    public function getIncludeWaiters()
    {
        return $this->include_waiters;
    }

    /**
     * Response will include waiters list if true
     *
     * Generated from protobuf field <code>bool include_waiters = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeWaiters($var)
    {
        GPBUtil::checkBool($var);
        $this->include_waiters = $var;

        return $this;
    }

    /**
     * Watch for changes in semaphore data
     *
     * Generated from protobuf field <code>bool watch_data = 5;</code>
     * @return bool
     */
    public function getWatchData()
    {
        return $this->watch_data;
    }

    /**
     * Watch for changes in semaphore data
     *
     * Generated from protobuf field <code>bool watch_data = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setWatchData($var)
    {
        GPBUtil::checkBool($var);
        $this->watch_data = $var;

        return $this;
    }

    /**
     * Watch for changes in semaphore owners (including owners data)
     *
     * Generated from protobuf field <code>bool watch_owners = 6;</code>
     * @return bool
     */
    public function getWatchOwners()
    {
        return $this->watch_owners;
    }

    /**
     * Watch for changes in semaphore owners (including owners data)
     *
     * Generated from protobuf field <code>bool watch_owners = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setWatchOwners($var)
    {
        GPBUtil::checkBool($var);
        $this->watch_owners = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DescribeSemaphore::class, \Ydb\Coordination\SessionRequest_DescribeSemaphore::class);

