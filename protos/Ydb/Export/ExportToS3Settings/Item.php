<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_export.proto

namespace Ydb\Export\ExportToS3Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Export.ExportToS3Settings.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Database path to a table to be exported
     *
     * Generated from protobuf field <code>string source_path = 1 [(.Ydb.required) = true];</code>
     */
    protected $source_path = '';
    /**
     * Tables are exported to one or more S3 objects.
     *The object name begins with 'destination_prefix'.
     *This prefix will be followed by '/data_PartNumber', where 'PartNumber'
     *represents the index of the part, starting at zero.
     *
     * Generated from protobuf field <code>string destination_prefix = 2 [(.Ydb.required) = true];</code>
     */
    protected $destination_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_path
     *           Database path to a table to be exported
     *     @type string $destination_prefix
     *           Tables are exported to one or more S3 objects.
     *          The object name begins with 'destination_prefix'.
     *          This prefix will be followed by '/data_PartNumber', where 'PartNumber'
     *          represents the index of the part, starting at zero.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbExport::initOnce();
        parent::__construct($data);
    }

    /**
     * Database path to a table to be exported
     *
     * Generated from protobuf field <code>string source_path = 1 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getSourcePath()
    {
        return $this->source_path;
    }

    /**
     * Database path to a table to be exported
     *
     * Generated from protobuf field <code>string source_path = 1 [(.Ydb.required) = true];</code>
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
     * Tables are exported to one or more S3 objects.
     *The object name begins with 'destination_prefix'.
     *This prefix will be followed by '/data_PartNumber', where 'PartNumber'
     *represents the index of the part, starting at zero.
     *
     * Generated from protobuf field <code>string destination_prefix = 2 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getDestinationPrefix()
    {
        return $this->destination_prefix;
    }

    /**
     * Tables are exported to one or more S3 objects.
     *The object name begins with 'destination_prefix'.
     *This prefix will be followed by '/data_PartNumber', where 'PartNumber'
     *represents the index of the part, starting at zero.
     *
     * Generated from protobuf field <code>string destination_prefix = 2 [(.Ydb.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_prefix = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Item::class, \Ydb\Export\ExportToS3Settings_Item::class);

