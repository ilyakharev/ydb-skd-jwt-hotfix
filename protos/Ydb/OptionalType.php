<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_value.proto

namespace Ydb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.OptionalType</code>
 */
class OptionalType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Type item = 1;</code>
     */
    protected $item = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Type $item
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbValue::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type item = 1;</code>
     * @return \Ydb\Type|null
     */
    public function getItem()
    {
        return $this->item;
    }

    public function hasItem()
    {
        return isset($this->item);
    }

    public function clearItem()
    {
        unset($this->item);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type item = 1;</code>
     * @param \Ydb\Type $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Type::class);
        $this->item = $var;

        return $this;
    }

}

