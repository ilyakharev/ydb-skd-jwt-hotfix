<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.RenameTableItem</code>
 */
class RenameTableItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Full path
     *
     * Generated from protobuf field <code>string source_path = 1;</code>
     */
    protected $source_path = '';
    /**
     * Full path
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     */
    protected $destination_path = '';
    /**
     * Move options
     *
     * Generated from protobuf field <code>bool replace_destination = 3;</code>
     */
    protected $replace_destination = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_path
     *           Full path
     *     @type string $destination_path
     *           Full path
     *     @type bool $replace_destination
     *           Move options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Full path
     *
     * Generated from protobuf field <code>string source_path = 1;</code>
     * @return string
     */
    public function getSourcePath()
    {
        return $this->source_path;
    }

    /**
     * Full path
     *
     * Generated from protobuf field <code>string source_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourcePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_path = $var;

        return $this;
    }

    /**
     * Full path
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     * @return string
     */
    public function getDestinationPath()
    {
        return $this->destination_path;
    }

    /**
     * Full path
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_path = $var;

        return $this;
    }

    /**
     * Move options
     *
     * Generated from protobuf field <code>bool replace_destination = 3;</code>
     * @return bool
     */
    public function getReplaceDestination()
    {
        return $this->replace_destination;
    }

    /**
     * Move options
     *
     * Generated from protobuf field <code>bool replace_destination = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReplaceDestination($var)
    {
        GPBUtil::checkBool($var);
        $this->replace_destination = $var;

        return $this;
    }

}
