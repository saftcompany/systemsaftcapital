<?php

/**
 * AdaBlock Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * AdaBlock Model
 */
class AdaBlock extends AbstractModel {

    public const _D = null;
    protected static $_name = "AdaBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "number" => ["number", "float", null, "getNumber", "setNumber", null, ["r" => 0]], 
        "epoch_no" => ["epochNo", "float", null, "getEpochNo", "setEpochNo", null, ["r" => 0]], 
        "slot_no" => ["slotNo", "float", null, "getSlotNo", "setSlotNo", null, ["r" => 0]], 
        "forged_at" => ["forgedAt", "string", null, "getForgedAt", "setForgedAt", null, ["r" => 0]], 
        "transactions" => ["transactions", "\Tatum\Model\AdaTx[]", null, "getTransactions", "setTransactions", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * AdaBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Hash of block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get number
     *
     * @return float|null
     */
    public function getNumber(): ?float {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param float|null $number The number of blocks preceding a particular block on a block chain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumber(?float $number) {
        return $this->_set("number", $number);
    }

    /**
     * Get epoch_no
     *
     * @return float|null
     */
    public function getEpochNo(): ?float {
        return $this->_data["epoch_no"];
    }

    /**
     * Set epoch_no
     * 
     * @param float|null $epoch_no Number of the epoch the block is included in.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEpochNo(?float $epoch_no) {
        return $this->_set("epoch_no", $epoch_no);
    }

    /**
     * Get slot_no
     *
     * @return float|null
     */
    public function getSlotNo(): ?float {
        return $this->_data["slot_no"];
    }

    /**
     * Set slot_no
     * 
     * @param float|null $slot_no Number of the slot the block is included in.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSlotNo(?float $slot_no) {
        return $this->_set("slot_no", $slot_no);
    }

    /**
     * Get forged_at
     *
     * @return string|null
     */
    public function getForgedAt(): ?string {
        return $this->_data["forged_at"];
    }

    /**
     * Set forged_at
     * 
     * @param string|null $forged_at Time of the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setForgedAt(?string $forged_at) {
        return $this->_set("forged_at", $forged_at);
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\AdaTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\AdaTx[]|null $transactions transactions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        return $this->_set("transactions", $transactions);
    }
}
