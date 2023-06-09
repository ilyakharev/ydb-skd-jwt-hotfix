<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_monitoring.proto

namespace Ydb\Monitoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Monitoring.SelfCheckResult</code>
 */
class SelfCheckResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.SelfCheck.Result self_check_result = 1;</code>
     */
    protected $self_check_result = 0;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.IssueLog issue_log = 2;</code>
     */
    private $issue_log;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.DatabaseStatus database_status = 3;</code>
     */
    private $database_status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $self_check_result
     *     @type array<\Ydb\Monitoring\IssueLog>|\Google\Protobuf\Internal\RepeatedField $issue_log
     *     @type array<\Ydb\Monitoring\DatabaseStatus>|\Google\Protobuf\Internal\RepeatedField $database_status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.SelfCheck.Result self_check_result = 1;</code>
     * @return int
     */
    public function getSelfCheckResult()
    {
        return $this->self_check_result;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.SelfCheck.Result self_check_result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSelfCheckResult($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Monitoring\SelfCheck\Result::class);
        $this->self_check_result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.IssueLog issue_log = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssueLog()
    {
        return $this->issue_log;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.IssueLog issue_log = 2;</code>
     * @param array<\Ydb\Monitoring\IssueLog>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIssueLog($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Monitoring\IssueLog::class);
        $this->issue_log = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.DatabaseStatus database_status = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatabaseStatus()
    {
        return $this->database_status;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.DatabaseStatus database_status = 3;</code>
     * @param array<\Ydb\Monitoring\DatabaseStatus>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatabaseStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Monitoring\DatabaseStatus::class);
        $this->database_status = $arr;

        return $this;
    }

}

