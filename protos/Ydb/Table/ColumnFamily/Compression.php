<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table\ColumnFamily;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.Table.ColumnFamily.Compression</code>
 */
class Compression
{
    /**
     * Generated from protobuf enum <code>COMPRESSION_UNSPECIFIED = 0;</code>
     */
    const COMPRESSION_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>COMPRESSION_NONE = 1;</code>
     */
    const COMPRESSION_NONE = 1;
    /**
     * Generated from protobuf enum <code>COMPRESSION_LZ4 = 2;</code>
     */
    const COMPRESSION_LZ4 = 2;

    private static $valueToName = [
        self::COMPRESSION_UNSPECIFIED => 'COMPRESSION_UNSPECIFIED',
        self::COMPRESSION_NONE => 'COMPRESSION_NONE',
        self::COMPRESSION_LZ4 => 'COMPRESSION_LZ4',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Compression::class, \Ydb\Table\ColumnFamily_Compression::class);

