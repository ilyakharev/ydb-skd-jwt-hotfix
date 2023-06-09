<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.TableProfileDescription</code>
 */
class TableProfileDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;
    /**
     * Generated from protobuf field <code>string default_storage_policy = 3;</code>
     */
    protected $default_storage_policy = '';
    /**
     * Generated from protobuf field <code>repeated string allowed_storage_policies = 4;</code>
     */
    private $allowed_storage_policies;
    /**
     * Generated from protobuf field <code>string default_compaction_policy = 5;</code>
     */
    protected $default_compaction_policy = '';
    /**
     * Generated from protobuf field <code>repeated string allowed_compaction_policies = 6;</code>
     */
    private $allowed_compaction_policies;
    /**
     * Generated from protobuf field <code>string default_partitioning_policy = 7;</code>
     */
    protected $default_partitioning_policy = '';
    /**
     * Generated from protobuf field <code>repeated string allowed_partitioning_policies = 8;</code>
     */
    private $allowed_partitioning_policies;
    /**
     * Generated from protobuf field <code>string default_execution_policy = 9;</code>
     */
    protected $default_execution_policy = '';
    /**
     * Generated from protobuf field <code>repeated string allowed_execution_policies = 10;</code>
     */
    private $allowed_execution_policies;
    /**
     * Generated from protobuf field <code>string default_replication_policy = 11;</code>
     */
    protected $default_replication_policy = '';
    /**
     * Generated from protobuf field <code>repeated string allowed_replication_policies = 12;</code>
     */
    private $allowed_replication_policies;
    /**
     * Generated from protobuf field <code>string default_caching_policy = 13;</code>
     */
    protected $default_caching_policy = '';
    /**
     * Generated from protobuf field <code>repeated string allowed_caching_policies = 14;</code>
     */
    private $allowed_caching_policies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *     @type string $default_storage_policy
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_storage_policies
     *     @type string $default_compaction_policy
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_compaction_policies
     *     @type string $default_partitioning_policy
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_partitioning_policies
     *     @type string $default_execution_policy
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_execution_policies
     *     @type string $default_replication_policy
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_replication_policies
     *     @type string $default_caching_policy
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_caching_policies
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_storage_policy = 3;</code>
     * @return string
     */
    public function getDefaultStoragePolicy()
    {
        return $this->default_storage_policy;
    }

    /**
     * Generated from protobuf field <code>string default_storage_policy = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultStoragePolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_storage_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_storage_policies = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedStoragePolicies()
    {
        return $this->allowed_storage_policies;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_storage_policies = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedStoragePolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_storage_policies = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_compaction_policy = 5;</code>
     * @return string
     */
    public function getDefaultCompactionPolicy()
    {
        return $this->default_compaction_policy;
    }

    /**
     * Generated from protobuf field <code>string default_compaction_policy = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultCompactionPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_compaction_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_compaction_policies = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedCompactionPolicies()
    {
        return $this->allowed_compaction_policies;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_compaction_policies = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedCompactionPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_compaction_policies = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_partitioning_policy = 7;</code>
     * @return string
     */
    public function getDefaultPartitioningPolicy()
    {
        return $this->default_partitioning_policy;
    }

    /**
     * Generated from protobuf field <code>string default_partitioning_policy = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultPartitioningPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_partitioning_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_partitioning_policies = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedPartitioningPolicies()
    {
        return $this->allowed_partitioning_policies;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_partitioning_policies = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedPartitioningPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_partitioning_policies = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_execution_policy = 9;</code>
     * @return string
     */
    public function getDefaultExecutionPolicy()
    {
        return $this->default_execution_policy;
    }

    /**
     * Generated from protobuf field <code>string default_execution_policy = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultExecutionPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_execution_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_execution_policies = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedExecutionPolicies()
    {
        return $this->allowed_execution_policies;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_execution_policies = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedExecutionPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_execution_policies = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_replication_policy = 11;</code>
     * @return string
     */
    public function getDefaultReplicationPolicy()
    {
        return $this->default_replication_policy;
    }

    /**
     * Generated from protobuf field <code>string default_replication_policy = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultReplicationPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_replication_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_replication_policies = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedReplicationPolicies()
    {
        return $this->allowed_replication_policies;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_replication_policies = 12;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedReplicationPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_replication_policies = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_caching_policy = 13;</code>
     * @return string
     */
    public function getDefaultCachingPolicy()
    {
        return $this->default_caching_policy;
    }

    /**
     * Generated from protobuf field <code>string default_caching_policy = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultCachingPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_caching_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_caching_policies = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedCachingPolicies()
    {
        return $this->allowed_caching_policies;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_caching_policies = 14;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedCachingPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_caching_policies = $arr;

        return $this;
    }

}

