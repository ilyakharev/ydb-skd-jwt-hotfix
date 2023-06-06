<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/annotations/validation.proto

namespace Ydb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Limit</code>
 */
class Limit extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Limit\Range $range
     *     @type int $lt
     *     @type int $le
     *     @type int $eq
     *     @type int $ge
     *     @type int $gt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\Annotations\Validation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Limit.Range range = 1;</code>
     * @return \Ydb\Limit\Range|null
     */
    public function getRange()
    {
        return $this->readOneof(1);
    }

    public function hasRange()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Limit.Range range = 1;</code>
     * @param \Ydb\Limit\Range $var
     * @return $this
     */
    public function setRange($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Limit\Range::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lt = 2;</code>
     * @return int
     */
    public function getLt()
    {
        return $this->readOneof(2);
    }

    public function hasLt()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>uint32 lt = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 le = 3;</code>
     * @return int
     */
    public function getLe()
    {
        return $this->readOneof(3);
    }

    public function hasLe()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>uint32 le = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLe($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 eq = 4;</code>
     * @return int
     */
    public function getEq()
    {
        return $this->readOneof(4);
    }

    public function hasEq()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>uint32 eq = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEq($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ge = 5;</code>
     * @return int
     */
    public function getGe()
    {
        return $this->readOneof(5);
    }

    public function hasGe()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>uint32 ge = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGe($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gt = 6;</code>
     * @return int
     */
    public function getGt()
    {
        return $this->readOneof(6);
    }

    public function hasGt()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>uint32 gt = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

