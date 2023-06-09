<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_cms.proto

namespace Ydb\Cms;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of quotas for schema operations
 *
 * Generated from protobuf message <code>Ydb.Cms.SchemaOperationQuotas</code>
 */
class SchemaOperationQuotas extends \Google\Protobuf\Internal\Message
{
    /**
     * Leaky bucket based quotas
     *
     * Generated from protobuf field <code>repeated .Ydb.Cms.SchemaOperationQuotas.LeakyBucket leaky_bucket_quotas = 1;</code>
     */
    private $leaky_bucket_quotas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Ydb\Cms\SchemaOperationQuotas\LeakyBucket>|\Google\Protobuf\Internal\RepeatedField $leaky_bucket_quotas
     *           Leaky bucket based quotas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCms::initOnce();
        parent::__construct($data);
    }

    /**
     * Leaky bucket based quotas
     *
     * Generated from protobuf field <code>repeated .Ydb.Cms.SchemaOperationQuotas.LeakyBucket leaky_bucket_quotas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLeakyBucketQuotas()
    {
        return $this->leaky_bucket_quotas;
    }

    /**
     * Leaky bucket based quotas
     *
     * Generated from protobuf field <code>repeated .Ydb.Cms.SchemaOperationQuotas.LeakyBucket leaky_bucket_quotas = 1;</code>
     * @param array<\Ydb\Cms\SchemaOperationQuotas\LeakyBucket>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLeakyBucketQuotas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Cms\SchemaOperationQuotas\LeakyBucket::class);
        $this->leaky_bucket_quotas = $arr;

        return $this;
    }

}

