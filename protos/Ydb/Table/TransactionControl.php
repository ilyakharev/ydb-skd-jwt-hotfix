<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.TransactionControl</code>
 */
class TransactionControl extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool commit_tx = 10;</code>
     */
    protected $commit_tx = false;
    protected $tx_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tx_id
     *     @type \Ydb\Table\TransactionSettings $begin_tx
     *     @type bool $commit_tx
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tx_id = 1;</code>
     * @return string
     */
    public function getTxId()
    {
        return $this->readOneof(1);
    }

    public function hasTxId()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string tx_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Table.TransactionSettings begin_tx = 2;</code>
     * @return \Ydb\Table\TransactionSettings|null
     */
    public function getBeginTx()
    {
        return $this->readOneof(2);
    }

    public function hasBeginTx()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Table.TransactionSettings begin_tx = 2;</code>
     * @param \Ydb\Table\TransactionSettings $var
     * @return $this
     */
    public function setBeginTx($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\TransactionSettings::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool commit_tx = 10;</code>
     * @return bool
     */
    public function getCommitTx()
    {
        return $this->commit_tx;
    }

    /**
     * Generated from protobuf field <code>bool commit_tx = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setCommitTx($var)
    {
        GPBUtil::checkBool($var);
        $this->commit_tx = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTxSelector()
    {
        return $this->whichOneof("tx_selector");
    }

}

