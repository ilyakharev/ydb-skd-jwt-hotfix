<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_scripting.proto

namespace Ydb\Scripting;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Scripting.ExplainYqlResult</code>
 */
class ExplainYqlResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .Ydb.Type> parameters_types = 1;</code>
     */
    private $parameters_types;
    /**
     * Generated from protobuf field <code>string plan = 2;</code>
     */
    protected $plan = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $parameters_types
     *     @type string $plan
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbScripting::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .Ydb.Type> parameters_types = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParametersTypes()
    {
        return $this->parameters_types;
    }

    /**
     * Generated from protobuf field <code>map<string, .Ydb.Type> parameters_types = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParametersTypes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Type::class);
        $this->parameters_types = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string plan = 2;</code>
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Generated from protobuf field <code>string plan = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->plan = $var;

        return $this;
    }

}

