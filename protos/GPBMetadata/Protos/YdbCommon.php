<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_common.proto

namespace GPBMetadata\Protos;

class YdbCommon
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
protos/ydb_common.protoYdb"J
FeatureFlag";
Status
STATUS_UNSPECIFIED 
ENABLED
DISABLED""
CostInfo
consumed_units ("
QuotaExceeded
disk ("4
VirtualTimestamp
	plan_step (
tx_id (BV
tech.ydb.commonBCommonProtosZ2github.com/ydb-platform/ydb-go-genproto/protos/Ydb�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

