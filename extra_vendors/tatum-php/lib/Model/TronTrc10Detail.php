<?php

/**
 * TronTrc10Detail Model
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
 * TronTrc10Detail Model
 */
class TronTrc10Detail extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronTrc10Detail";
    protected static $_definition = [
        "owner_address" => ["ownerAddress", "string", null, "getOwnerAddress", "setOwnerAddress", null, ["r" => 0, "nl" => 34, "xl" => 34]], 
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "abbr" => ["abbr", "string", null, "getAbbr", "setAbbr", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "description" => ["description", "string", null, "getDescription", "setDescription", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "total_supply" => ["totalSupply", "float", null, "getTotalSupply", "setTotalSupply", null, ["r" => 0, "n" => [0]]], 
        "precision" => ["precision", "float", null, "getPrecision", "setPrecision", null, ["r" => 0, "n" => [0], "x" => [5]]], 
        "id" => ["id", "float", null, "getId", "setId", null, ["r" => 0]]
    ];

    /**
     * TronTrc10Detail
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get owner_address
     *
     * @return string|null
     */
    public function getOwnerAddress(): ?string {
        return $this->_data["owner_address"];
    }

    /**
     * Set owner_address
     * 
     * @param string|null $owner_address The address of the TRC-10 token's owner in the hexadecimal format
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwnerAddress(?string $owner_address) {
        return $this->_set("owner_address", $owner_address);
    }

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName(): ?string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string|null $name The name of the TRC-10 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(?string $name) {
        return $this->_set("name", $name);
    }

    /**
     * Get abbr
     *
     * @return string|null
     */
    public function getAbbr(): ?string {
        return $this->_data["abbr"];
    }

    /**
     * Set abbr
     * 
     * @param string|null $abbr The abbreviated name of the TRC-10 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAbbr(?string $abbr) {
        return $this->_set("abbr", $abbr);
    }

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string|null $description The description of the TRC-10 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDescription(?string $description) {
        return $this->_set("description", $description);
    }

    /**
     * Get url
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string|null $url The URL of the TRC-10 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(?string $url) {
        return $this->_set("url", $url);
    }

    /**
     * Get total_supply
     *
     * @return float|null
     */
    public function getTotalSupply(): ?float {
        return $this->_data["total_supply"];
    }

    /**
     * Set total_supply
     * 
     * @param float|null $total_supply The total supply of tokens in the TRC-10 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotalSupply(?float $total_supply) {
        return $this->_set("total_supply", $total_supply);
    }

    /**
     * Get precision
     *
     * @return float|null
     */
    public function getPrecision(): ?float {
        return $this->_data["precision"];
    }

    /**
     * Set precision
     * 
     * @param float|null $precision The number of decimal places
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrecision(?float $precision) {
        return $this->_set("precision", $precision);
    }

    /**
     * Get id
     *
     * @return float|null
     */
    public function getId(): ?float {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param float|null $id The ID of the TRC-10 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?float $id) {
        return $this->_set("id", $id);
    }
}
