<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_discovery.proto

namespace Ydb\Discovery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Discovery.WhoAmIResult</code>
 */
class WhoAmIResult extends \Google\Protobuf\Internal\Message
{
    /**
     * User SID (Security ID)
     *
     * Generated from protobuf field <code>string user = 1;</code>
     */
    protected $user = '';
    /**
     * List of group SIDs (Security IDs) for the user
     *
     * Generated from protobuf field <code>repeated string groups = 2;</code>
     */
    private $groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user
     *           User SID (Security ID)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $groups
     *           List of group SIDs (Security IDs) for the user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * User SID (Security ID)
     *
     * Generated from protobuf field <code>string user = 1;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * User SID (Security ID)
     *
     * Generated from protobuf field <code>string user = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * List of group SIDs (Security IDs) for the user
     *
     * Generated from protobuf field <code>repeated string groups = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * List of group SIDs (Security IDs) for the user
     *
     * Generated from protobuf field <code>repeated string groups = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->groups = $arr;

        return $this;
    }

}
