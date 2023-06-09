<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.Topic.Codec</code>
 */
class Codec
{
    /**
     * Generated from protobuf enum <code>CODEC_UNSPECIFIED = 0;</code>
     */
    const CODEC_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>CODEC_RAW = 1;</code>
     */
    const CODEC_RAW = 1;
    /**
     * Generated from protobuf enum <code>CODEC_GZIP = 2;</code>
     */
    const CODEC_GZIP = 2;
    /**
     * Generated from protobuf enum <code>CODEC_LZOP = 3;</code>
     */
    const CODEC_LZOP = 3;
    /**
     * Generated from protobuf enum <code>CODEC_ZSTD = 4;</code>
     */
    const CODEC_ZSTD = 4;
    /**
     * User-defined codecs from 10000 to 19999
     *
     * Generated from protobuf enum <code>CODEC_CUSTOM = 10000;</code>
     */
    const CODEC_CUSTOM = 10000;

    private static $valueToName = [
        self::CODEC_UNSPECIFIED => 'CODEC_UNSPECIFIED',
        self::CODEC_RAW => 'CODEC_RAW',
        self::CODEC_GZIP => 'CODEC_GZIP',
        self::CODEC_LZOP => 'CODEC_LZOP',
        self::CODEC_ZSTD => 'CODEC_ZSTD',
        self::CODEC_CUSTOM => 'CODEC_CUSTOM',
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

