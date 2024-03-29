<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/department.proto

namespace User;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * department list request
 *
 * Generated from protobuf message <code>user.DepartmentListRequest</code>
 */
final class DepartmentListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Order = 1;</code>
     */
    private $Order = '';
    /**
     * Generated from protobuf field <code>string CreatedAt = 2;</code>
     */
    private $CreatedAt = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Order
     *     @type string $CreatedAt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User\Department::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Order = 1;</code>
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * Generated from protobuf field <code>string Order = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkString($var, True);
        $this->Order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CreatedAt = 2;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * Generated from protobuf field <code>string CreatedAt = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreatedAt = $var;

        return $this;
    }

}

