<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_common.proto

namespace Ydb\FeatureFlag;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.FeatureFlag.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * Generated from protobuf enum <code>DISABLED = 2;</code>
     */
    const DISABLED = 2;

    private static $valueToName = [
        self::STATUS_UNSPECIFIED => 'STATUS_UNSPECIFIED',
        self::ENABLED => 'ENABLED',
        self::DISABLED => 'DISABLED',
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
class_alias(Status::class, \Ydb\FeatureFlag_Status::class);

