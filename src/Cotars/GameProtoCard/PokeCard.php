<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/cotars_game_proto_card.proto

namespace Cotars\GameProtoCard;

/**
 * Protobuf type <code>Cotars.GameProtoCard.PokeCard</code>
 */
class PokeCard
{
    /**
     * Generated from protobuf enum <code>POKE_CARD_BLANK = 0;</code>
     */
    const POKE_CARD_BLANK = 0;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_A = 1;</code>
     */
    const POKE_CARD_SPADE_A = 1;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_2 = 2;</code>
     */
    const POKE_CARD_SPADE_2 = 2;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_3 = 3;</code>
     */
    const POKE_CARD_SPADE_3 = 3;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_4 = 4;</code>
     */
    const POKE_CARD_SPADE_4 = 4;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_5 = 5;</code>
     */
    const POKE_CARD_SPADE_5 = 5;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_6 = 6;</code>
     */
    const POKE_CARD_SPADE_6 = 6;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_7 = 7;</code>
     */
    const POKE_CARD_SPADE_7 = 7;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_8 = 8;</code>
     */
    const POKE_CARD_SPADE_8 = 8;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_9 = 9;</code>
     */
    const POKE_CARD_SPADE_9 = 9;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_10 = 10;</code>
     */
    const POKE_CARD_SPADE_10 = 10;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_J = 11;</code>
     */
    const POKE_CARD_SPADE_J = 11;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_Q = 12;</code>
     */
    const POKE_CARD_SPADE_Q = 12;
    /**
     * Generated from protobuf enum <code>POKE_CARD_SPADE_K = 13;</code>
     */
    const POKE_CARD_SPADE_K = 13;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_A = 17;</code>
     */
    const POKE_CARD_HEART_A = 17;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_2 = 18;</code>
     */
    const POKE_CARD_HEART_2 = 18;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_3 = 19;</code>
     */
    const POKE_CARD_HEART_3 = 19;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_4 = 20;</code>
     */
    const POKE_CARD_HEART_4 = 20;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_5 = 21;</code>
     */
    const POKE_CARD_HEART_5 = 21;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_6 = 22;</code>
     */
    const POKE_CARD_HEART_6 = 22;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_7 = 23;</code>
     */
    const POKE_CARD_HEART_7 = 23;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_8 = 24;</code>
     */
    const POKE_CARD_HEART_8 = 24;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_9 = 25;</code>
     */
    const POKE_CARD_HEART_9 = 25;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_10 = 26;</code>
     */
    const POKE_CARD_HEART_10 = 26;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_J = 27;</code>
     */
    const POKE_CARD_HEART_J = 27;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_Q = 28;</code>
     */
    const POKE_CARD_HEART_Q = 28;
    /**
     * Generated from protobuf enum <code>POKE_CARD_HEART_K = 29;</code>
     */
    const POKE_CARD_HEART_K = 29;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_A = 33;</code>
     */
    const POKE_CARD_DIAMOND_A = 33;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_2 = 34;</code>
     */
    const POKE_CARD_DIAMOND_2 = 34;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_3 = 35;</code>
     */
    const POKE_CARD_DIAMOND_3 = 35;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_4 = 36;</code>
     */
    const POKE_CARD_DIAMOND_4 = 36;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_5 = 37;</code>
     */
    const POKE_CARD_DIAMOND_5 = 37;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_6 = 38;</code>
     */
    const POKE_CARD_DIAMOND_6 = 38;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_7 = 39;</code>
     */
    const POKE_CARD_DIAMOND_7 = 39;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_8 = 40;</code>
     */
    const POKE_CARD_DIAMOND_8 = 40;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_9 = 41;</code>
     */
    const POKE_CARD_DIAMOND_9 = 41;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_10 = 42;</code>
     */
    const POKE_CARD_DIAMOND_10 = 42;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_J = 43;</code>
     */
    const POKE_CARD_DIAMOND_J = 43;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_Q = 44;</code>
     */
    const POKE_CARD_DIAMOND_Q = 44;
    /**
     * Generated from protobuf enum <code>POKE_CARD_DIAMOND_K = 45;</code>
     */
    const POKE_CARD_DIAMOND_K = 45;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_A = 49;</code>
     */
    const POKE_CARD_CLUB_A = 49;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_2 = 50;</code>
     */
    const POKE_CARD_CLUB_2 = 50;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_3 = 51;</code>
     */
    const POKE_CARD_CLUB_3 = 51;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_4 = 52;</code>
     */
    const POKE_CARD_CLUB_4 = 52;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_5 = 53;</code>
     */
    const POKE_CARD_CLUB_5 = 53;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_6 = 54;</code>
     */
    const POKE_CARD_CLUB_6 = 54;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_7 = 55;</code>
     */
    const POKE_CARD_CLUB_7 = 55;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_8 = 56;</code>
     */
    const POKE_CARD_CLUB_8 = 56;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_9 = 57;</code>
     */
    const POKE_CARD_CLUB_9 = 57;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_10 = 58;</code>
     */
    const POKE_CARD_CLUB_10 = 58;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_J = 59;</code>
     */
    const POKE_CARD_CLUB_J = 59;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_Q = 60;</code>
     */
    const POKE_CARD_CLUB_Q = 60;
    /**
     * Generated from protobuf enum <code>POKE_CARD_CLUB_K = 61;</code>
     */
    const POKE_CARD_CLUB_K = 61;
    /**
     * Generated from protobuf enum <code>POKE_CARD_QUEEN = 65;</code>
     */
    const POKE_CARD_QUEEN = 65;
    /**
     * Generated from protobuf enum <code>POKE_CARD_KING = 66;</code>
     */
    const POKE_CARD_KING = 66;
}

