<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_cms.proto

namespace Ydb\Cms;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create a new database. For successfull creation
 * specified database shouldn't exist. At least one storage
 * unit should be requested for the database.
 *
 * Generated from protobuf message <code>Ydb.Cms.CreateDatabaseRequest</code>
 */
class CreateDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     */
    protected $operation_params = null;
    /**
     * Required. Full path to database's home dir. Used as database ID.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';
    /**
     * Additional database options.
     *
     * Generated from protobuf field <code>.Ydb.Cms.DatabaseOptions options = 4;</code>
     */
    protected $options = null;
    /**
     * Attach attributes to database.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 5;</code>
     */
    private $attributes;
    /**
     * Optional quotas for schema operations
     *
     * Generated from protobuf field <code>.Ydb.Cms.SchemaOperationQuotas schema_operation_quotas = 8;</code>
     */
    protected $schema_operation_quotas = null;
    /**
     * Optional idempotency key
     *
     * Generated from protobuf field <code>string idempotency_key = 9;</code>
     */
    protected $idempotency_key = '';
    /**
     * Optional quotas for the database
     *
     * Generated from protobuf field <code>.Ydb.Cms.DatabaseQuotas database_quotas = 10;</code>
     */
    protected $database_quotas = null;
    protected $resources_kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Operations\OperationParams $operation_params
     *     @type string $path
     *           Required. Full path to database's home dir. Used as database ID.
     *     @type \Ydb\Cms\Resources $resources
     *           Resources to allocate for database by CMS.
     *     @type \Ydb\Cms\Resources $shared_resources
     *           Shared resources can be used by serverless databases.
     *     @type \Ydb\Cms\ServerlessResources $serverless_resources
     *           If specified, the created database will be "serverless".
     *     @type \Ydb\Cms\DatabaseOptions $options
     *           Additional database options.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Attach attributes to database.
     *     @type \Ydb\Cms\SchemaOperationQuotas $schema_operation_quotas
     *           Optional quotas for schema operations
     *     @type string $idempotency_key
     *           Optional idempotency key
     *     @type \Ydb\Cms\DatabaseQuotas $database_quotas
     *           Optional quotas for the database
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @return \Ydb\Operations\OperationParams|null
     */
    public function getOperationParams()
    {
        return $this->operation_params;
    }

    public function hasOperationParams()
    {
        return isset($this->operation_params);
    }

    public function clearOperationParams()
    {
        unset($this->operation_params);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @param \Ydb\Operations\OperationParams $var
     * @return $this
     */
    public function setOperationParams($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Operations\OperationParams::class);
        $this->operation_params = $var;

        return $this;
    }

    /**
     * Required. Full path to database's home dir. Used as database ID.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Required. Full path to database's home dir. Used as database ID.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Resources to allocate for database by CMS.
     *
     * Generated from protobuf field <code>.Ydb.Cms.Resources resources = 3;</code>
     * @return \Ydb\Cms\Resources|null
     */
    public function getResources()
    {
        return $this->readOneof(3);
    }

    public function hasResources()
    {
        return $this->hasOneof(3);
    }

    /**
     * Resources to allocate for database by CMS.
     *
     * Generated from protobuf field <code>.Ydb.Cms.Resources resources = 3;</code>
     * @param \Ydb\Cms\Resources $var
     * @return $this
     */
    public function setResources($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Cms\Resources::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Shared resources can be used by serverless databases.
     *
     * Generated from protobuf field <code>.Ydb.Cms.Resources shared_resources = 6;</code>
     * @return \Ydb\Cms\Resources|null
     */
    public function getSharedResources()
    {
        return $this->readOneof(6);
    }

    public function hasSharedResources()
    {
        return $this->hasOneof(6);
    }

    /**
     * Shared resources can be used by serverless databases.
     *
     * Generated from protobuf field <code>.Ydb.Cms.Resources shared_resources = 6;</code>
     * @param \Ydb\Cms\Resources $var
     * @return $this
     */
    public function setSharedResources($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Cms\Resources::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * If specified, the created database will be "serverless".
     *
     * Generated from protobuf field <code>.Ydb.Cms.ServerlessResources serverless_resources = 7;</code>
     * @return \Ydb\Cms\ServerlessResources|null
     */
    public function getServerlessResources()
    {
        return $this->readOneof(7);
    }

    public function hasServerlessResources()
    {
        return $this->hasOneof(7);
    }

    /**
     * If specified, the created database will be "serverless".
     *
     * Generated from protobuf field <code>.Ydb.Cms.ServerlessResources serverless_resources = 7;</code>
     * @param \Ydb\Cms\ServerlessResources $var
     * @return $this
     */
    public function setServerlessResources($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Cms\ServerlessResources::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Additional database options.
     *
     * Generated from protobuf field <code>.Ydb.Cms.DatabaseOptions options = 4;</code>
     * @return \Ydb\Cms\DatabaseOptions|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Additional database options.
     *
     * Generated from protobuf field <code>.Ydb.Cms.DatabaseOptions options = 4;</code>
     * @param \Ydb\Cms\DatabaseOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Cms\DatabaseOptions::class);
        $this->options = $var;

        return $this;
    }

    /**
     * Attach attributes to database.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Attach attributes to database.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Optional quotas for schema operations
     *
     * Generated from protobuf field <code>.Ydb.Cms.SchemaOperationQuotas schema_operation_quotas = 8;</code>
     * @return \Ydb\Cms\SchemaOperationQuotas|null
     */
    public function getSchemaOperationQuotas()
    {
        return $this->schema_operation_quotas;
    }

    public function hasSchemaOperationQuotas()
    {
        return isset($this->schema_operation_quotas);
    }

    public function clearSchemaOperationQuotas()
    {
        unset($this->schema_operation_quotas);
    }

    /**
     * Optional quotas for schema operations
     *
     * Generated from protobuf field <code>.Ydb.Cms.SchemaOperationQuotas schema_operation_quotas = 8;</code>
     * @param \Ydb\Cms\SchemaOperationQuotas $var
     * @return $this
     */
    public function setSchemaOperationQuotas($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Cms\SchemaOperationQuotas::class);
        $this->schema_operation_quotas = $var;

        return $this;
    }

    /**
     * Optional idempotency key
     *
     * Generated from protobuf field <code>string idempotency_key = 9;</code>
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->idempotency_key;
    }

    /**
     * Optional idempotency key
     *
     * Generated from protobuf field <code>string idempotency_key = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setIdempotencyKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->idempotency_key = $var;

        return $this;
    }

    /**
     * Optional quotas for the database
     *
     * Generated from protobuf field <code>.Ydb.Cms.DatabaseQuotas database_quotas = 10;</code>
     * @return \Ydb\Cms\DatabaseQuotas|null
     */
    public function getDatabaseQuotas()
    {
        return $this->database_quotas;
    }

    public function hasDatabaseQuotas()
    {
        return isset($this->database_quotas);
    }

    public function clearDatabaseQuotas()
    {
        unset($this->database_quotas);
    }

    /**
     * Optional quotas for the database
     *
     * Generated from protobuf field <code>.Ydb.Cms.DatabaseQuotas database_quotas = 10;</code>
     * @param \Ydb\Cms\DatabaseQuotas $var
     * @return $this
     */
    public function setDatabaseQuotas($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Cms\DatabaseQuotas::class);
        $this->database_quotas = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourcesKind()
    {
        return $this->whichOneof("resources_kind");
    }

}

