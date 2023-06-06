<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_scheme.proto

namespace Ydb\Scheme;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Scheme.PermissionsAction</code>
 */
class PermissionsAction extends \Google\Protobuf\Internal\Message
{
    protected $action;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Scheme\Permissions $grant
     *           Grant permissions
     *     @type \Ydb\Scheme\Permissions $revoke
     *           Revoke permissions
     *     @type \Ydb\Scheme\Permissions $set
     *           Rewrite permissions for given subject (last set win in case of multiple set for one subject)
     *     @type string $change_owner
     *           New owner for object
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbScheme::initOnce();
        parent::__construct($data);
    }

    /**
     * Grant permissions
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Permissions grant = 1;</code>
     * @return \Ydb\Scheme\Permissions|null
     */
    public function getGrant()
    {
        return $this->readOneof(1);
    }

    public function hasGrant()
    {
        return $this->hasOneof(1);
    }

    /**
     * Grant permissions
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Permissions grant = 1;</code>
     * @param \Ydb\Scheme\Permissions $var
     * @return $this
     */
    public function setGrant($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Scheme\Permissions::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Revoke permissions
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Permissions revoke = 2;</code>
     * @return \Ydb\Scheme\Permissions|null
     */
    public function getRevoke()
    {
        return $this->readOneof(2);
    }

    public function hasRevoke()
    {
        return $this->hasOneof(2);
    }

    /**
     * Revoke permissions
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Permissions revoke = 2;</code>
     * @param \Ydb\Scheme\Permissions $var
     * @return $this
     */
    public function setRevoke($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Scheme\Permissions::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Rewrite permissions for given subject (last set win in case of multiple set for one subject)
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Permissions set = 3;</code>
     * @return \Ydb\Scheme\Permissions|null
     */
    public function getSet()
    {
        return $this->readOneof(3);
    }

    public function hasSet()
    {
        return $this->hasOneof(3);
    }

    /**
     * Rewrite permissions for given subject (last set win in case of multiple set for one subject)
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Permissions set = 3;</code>
     * @param \Ydb\Scheme\Permissions $var
     * @return $this
     */
    public function setSet($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Scheme\Permissions::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * New owner for object
     *
     * Generated from protobuf field <code>string change_owner = 4;</code>
     * @return string
     */
    public function getChangeOwner()
    {
        return $this->readOneof(4);
    }

    public function hasChangeOwner()
    {
        return $this->hasOneof(4);
    }

    /**
     * New owner for object
     *
     * Generated from protobuf field <code>string change_owner = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setChangeOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->whichOneof("action");
    }

}

