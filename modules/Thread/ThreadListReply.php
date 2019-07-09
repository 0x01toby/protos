<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: thread/thread.proto

namespace Thread;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * thread list response 数据
 *
 * Generated from protobuf message <code>thread.ThreadListReply</code>
 */
final class ThreadListReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .thread.TheadReply list = 1;</code>
     */
    private $list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Thread\TheadReply[]|\Google\Protobuf\Internal\RepeatedField $list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Thread\Thread::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .thread.TheadReply list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .thread.TheadReply list = 1;</code>
     * @param \Thread\TheadReply[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Thread\TheadReply::class);
        $this->list = $arr;

        return $this;
    }

}
