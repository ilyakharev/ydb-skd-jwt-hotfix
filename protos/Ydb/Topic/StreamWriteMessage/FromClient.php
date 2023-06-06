<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamWriteMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Client-server message for write session. Contains one of:
 *     InitRequest - handshake request.
 *     WriteRequest - portion of data to be written.
 *     UpdateTokenRequest - user credentials if update is needed.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamWriteMessage.FromClient</code>
 */
class FromClient extends \Google\Protobuf\Internal\Message
{
    protected $client_message;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Topic\StreamWriteMessage\InitRequest $init_request
     *     @type \Ydb\Topic\StreamWriteMessage\WriteRequest $write_request
     *     @type \Ydb\Topic\UpdateTokenRequest $update_token_request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.StreamWriteMessage.InitRequest init_request = 1;</code>
     * @return \Ydb\Topic\StreamWriteMessage\InitRequest|null
     */
    public function getInitRequest()
    {
        return $this->readOneof(1);
    }

    public function hasInitRequest()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.StreamWriteMessage.InitRequest init_request = 1;</code>
     * @param \Ydb\Topic\StreamWriteMessage\InitRequest $var
     * @return $this
     */
    public function setInitRequest($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\StreamWriteMessage\InitRequest::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.StreamWriteMessage.WriteRequest write_request = 2;</code>
     * @return \Ydb\Topic\StreamWriteMessage\WriteRequest|null
     */
    public function getWriteRequest()
    {
        return $this->readOneof(2);
    }

    public function hasWriteRequest()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.StreamWriteMessage.WriteRequest write_request = 2;</code>
     * @param \Ydb\Topic\StreamWriteMessage\WriteRequest $var
     * @return $this
     */
    public function setWriteRequest($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\StreamWriteMessage\WriteRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.UpdateTokenRequest update_token_request = 3;</code>
     * @return \Ydb\Topic\UpdateTokenRequest|null
     */
    public function getUpdateTokenRequest()
    {
        return $this->readOneof(3);
    }

    public function hasUpdateTokenRequest()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Topic.UpdateTokenRequest update_token_request = 3;</code>
     * @param \Ydb\Topic\UpdateTokenRequest $var
     * @return $this
     */
    public function setUpdateTokenRequest($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\UpdateTokenRequest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getClientMessage()
    {
        return $this->whichOneof("client_message");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FromClient::class, \Ydb\Topic\StreamWriteMessage_FromClient::class);

