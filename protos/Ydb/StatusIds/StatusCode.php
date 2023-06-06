<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_status_codes.proto

namespace Ydb\StatusIds;

use UnexpectedValueException;

/**
 * reserved range [400000, 400999]
 *
 * Protobuf type <code>Ydb.StatusIds.StatusCode</code>
 */
class StatusCode
{
    /**
     * Generated from protobuf enum <code>STATUS_CODE_UNSPECIFIED = 0;</code>
     */
    const STATUS_CODE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>SUCCESS = 400000;</code>
     */
    const SUCCESS = 400000;
    /**
     * Generated from protobuf enum <code>BAD_REQUEST = 400010;</code>
     */
    const BAD_REQUEST = 400010;
    /**
     * Generated from protobuf enum <code>UNAUTHORIZED = 400020;</code>
     */
    const UNAUTHORIZED = 400020;
    /**
     * Generated from protobuf enum <code>INTERNAL_ERROR = 400030;</code>
     */
    const INTERNAL_ERROR = 400030;
    /**
     * Generated from protobuf enum <code>ABORTED = 400040;</code>
     */
    const ABORTED = 400040;
    /**
     * Generated from protobuf enum <code>UNAVAILABLE = 400050;</code>
     */
    const UNAVAILABLE = 400050;
    /**
     * Generated from protobuf enum <code>OVERLOADED = 400060;</code>
     */
    const OVERLOADED = 400060;
    /**
     * Generated from protobuf enum <code>SCHEME_ERROR = 400070;</code>
     */
    const SCHEME_ERROR = 400070;
    /**
     * Generated from protobuf enum <code>GENERIC_ERROR = 400080;</code>
     */
    const GENERIC_ERROR = 400080;
    /**
     * Generated from protobuf enum <code>TIMEOUT = 400090;</code>
     */
    const TIMEOUT = 400090;
    /**
     * Generated from protobuf enum <code>BAD_SESSION = 400100;</code>
     */
    const BAD_SESSION = 400100;
    /**
     * Generated from protobuf enum <code>PRECONDITION_FAILED = 400120;</code>
     */
    const PRECONDITION_FAILED = 400120;
    /**
     * Generated from protobuf enum <code>ALREADY_EXISTS = 400130;</code>
     */
    const ALREADY_EXISTS = 400130;
    /**
     * Generated from protobuf enum <code>NOT_FOUND = 400140;</code>
     */
    const NOT_FOUND = 400140;
    /**
     * Generated from protobuf enum <code>SESSION_EXPIRED = 400150;</code>
     */
    const SESSION_EXPIRED = 400150;
    /**
     * Generated from protobuf enum <code>CANCELLED = 400160;</code>
     */
    const CANCELLED = 400160;
    /**
     * Generated from protobuf enum <code>UNDETERMINED = 400170;</code>
     */
    const UNDETERMINED = 400170;
    /**
     * Generated from protobuf enum <code>UNSUPPORTED = 400180;</code>
     */
    const UNSUPPORTED = 400180;
    /**
     * Generated from protobuf enum <code>SESSION_BUSY = 400190;</code>
     */
    const SESSION_BUSY = 400190;

    private static $valueToName = [
        self::STATUS_CODE_UNSPECIFIED => 'STATUS_CODE_UNSPECIFIED',
        self::SUCCESS => 'SUCCESS',
        self::BAD_REQUEST => 'BAD_REQUEST',
        self::UNAUTHORIZED => 'UNAUTHORIZED',
        self::INTERNAL_ERROR => 'INTERNAL_ERROR',
        self::ABORTED => 'ABORTED',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::OVERLOADED => 'OVERLOADED',
        self::SCHEME_ERROR => 'SCHEME_ERROR',
        self::GENERIC_ERROR => 'GENERIC_ERROR',
        self::TIMEOUT => 'TIMEOUT',
        self::BAD_SESSION => 'BAD_SESSION',
        self::PRECONDITION_FAILED => 'PRECONDITION_FAILED',
        self::ALREADY_EXISTS => 'ALREADY_EXISTS',
        self::NOT_FOUND => 'NOT_FOUND',
        self::SESSION_EXPIRED => 'SESSION_EXPIRED',
        self::CANCELLED => 'CANCELLED',
        self::UNDETERMINED => 'UNDETERMINED',
        self::UNSUPPORTED => 'UNSUPPORTED',
        self::SESSION_BUSY => 'SESSION_BUSY',
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
class_alias(StatusCode::class, \Ydb\StatusIds_StatusCode::class);

