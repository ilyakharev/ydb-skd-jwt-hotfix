<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.QueryCachePolicy</code>
 */
class QueryCachePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool keep_in_cache = 1;</code>
     */
    protected $keep_in_cache = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $keep_in_cache
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool keep_in_cache = 1;</code>
     * @return bool
     */
    public function getKeepInCache()
    {
        return $this->keep_in_cache;
    }

    /**
     * Generated from protobuf field <code>bool keep_in_cache = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeepInCache($var)
    {
        GPBUtil::checkBool($var);
        $this->keep_in_cache = $var;

        return $this;
    }

}

