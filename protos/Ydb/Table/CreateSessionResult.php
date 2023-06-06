<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.CreateSessionResult</code>
 */
class CreateSessionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Session identifier
     *
     * Generated from protobuf field <code>string session_id = 1;</code>
     */
    protected $session_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *           Session identifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Session identifier
     *
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Session identifier
     *
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

}

