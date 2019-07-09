<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/department.proto

namespace User;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * department list response
 *
 * Generated from protobuf message <code>user.DepartmentListReply</code>
 */
final class DepartmentListReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .user.DepartmentReply list = 1;</code>
     */
    private $list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \User\DepartmentReply[]|\Google\Protobuf\Internal\RepeatedField $list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User\Department::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .user.DepartmentReply list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .user.DepartmentReply list = 1;</code>
     * @param \User\DepartmentReply[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \User\DepartmentReply::class);
        $this->list = $arr;

        return $this;
    }

}
