<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/cotars_game_proto_card.proto

namespace Cotars\GameProtoCard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *玩家桌子操作通知 server->client
 *
 * Generated from protobuf message <code>Cotars.GameProtoCard.TableActionNtf</code>
 */
class TableActionNtf extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>uint32 seatid = 2;</code>
     */
    private $seatid = 0;
    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableAction action = 3;</code>
     */
    private $action = 0;
    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.PlayerInfo player = 4;</code>
     */
    private $player = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $seatid
     *     @type int $action
     *     @type \Cotars\GameProtoCard\PlayerInfo $player
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\CotarsGameProtoCard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 seatid = 2;</code>
     * @return int
     */
    public function getSeatid()
    {
        return $this->seatid;
    }

    /**
     * Generated from protobuf field <code>uint32 seatid = 2;</code>
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
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableAction action = 3;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableAction action = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Cotars\GameProtoCard\TableAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.PlayerInfo player = 4;</code>
     * @return \Cotars\GameProtoCard\PlayerInfo
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.PlayerInfo player = 4;</code>
     * @param \Cotars\GameProtoCard\PlayerInfo $var
     * @return $this
     */
    public function setPlayer($var)
    {
        GPBUtil::checkMessage($var, \Cotars\GameProtoCard\PlayerInfo::class);
        $this->player = $var;

        return $this;
    }

}

