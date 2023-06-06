<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination\SessionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * The result of semaphore update
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionResponse.UpdateSemaphoreResult</code>
 */
class UpdateSemaphoreResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     */
    protected $req_id = 0;
    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 3;</code>
     */
    private $issues;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $req_id
     *     @type int $status
     *     @type array<\Ydb\Issue\IssueMessage>|\Google\Protobuf\Internal\RepeatedField $issues
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     * @return int|string
     */
    public function getReqId()
    {
        return $this->req_id;
    }

    /**
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
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Ydb\StatusIds\StatusCode::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 3;</code>
     * @param array<\Ydb\Issue\IssueMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIssues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Issue\IssueMessage::class);
        $this->issues = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpdateSemaphoreResult::class, \Ydb\Coordination\SessionResponse_UpdateSemaphoreResult::class);

