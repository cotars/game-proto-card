<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/cotars_game_proto_card.proto

namespace Cotars\GameProtoCard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Cotars.GameProtoCard.PlayerInfo</code>
 */
class PlayerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.PlayerStatus status = 1;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>uint32 uid = 2;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 seatid = 3;</code>
     */
    private $seatid = 0;
    /**
     * UserInfo info = 5;
     *
     * Generated from protobuf field <code>int32 score = 4;</code>
     */
    private $score = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type int $uid
     *     @type int $seatid
     *     @type int $score
     *           UserInfo info = 5;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\CotarsGameProtoCard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.PlayerStatus status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.PlayerStatus status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Cotars\GameProtoCard\PlayerStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 2;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 seatid = 3;</code>
     * @return int
     */
    public function getSeatid()
    {
        return $this->seatid;
    }

    /**
     * Generated from protobuf field <code>uint32 seatid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSeatid($var)
    {
        GPBUtil::checkUint32($var);
        $this->seatid = $var;

        return $this;
    }

    /**
     * UserInfo info = 5;
     *
     * Generated from protobuf field <code>int32 score = 4;</code>
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * UserInfo info = 5;
     *
     * Generated from protobuf field <code>int32 score = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->score = $var;

        return $this;
    }

}
