<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination\SessionRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Used to release a semaphore
 * WARNING: a single session cannot release the same semaphore multiple times
 * The release operation will either remove current session from waiters
 * queue or release an already owned semaphore.
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionRequest.ReleaseSemaphore</code>
 */
class ReleaseSemaphore extends \Google\Protobuf\Internal\Message
{
    /**
     * Client-defined request id, echoed in the response
     *
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     */
    protected $req_id = 0;
    /**
     * Name of the semaphore to release
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $req_id
     *           Client-defined request id, echoed in the response
     *     @type string $name
     *           Name of the semaphore to release
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
     * Name of the semaphore to release
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the semaphore to release
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

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReleaseSemaphore::class, \Ydb\Coordination\SessionRequest_ReleaseSemaphore::class);

