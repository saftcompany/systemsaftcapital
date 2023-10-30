<?php

/**
 * CheckMalicousAddress_200_response Model
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
 * CheckMalicousAddress_200_response Model
 */
class CheckMalicousAddress200Response extends AbstractModel {

    public const _D = null;
    public const STATUS_VALID = 'valid';
    public const STATUS_INVALID = 'invalid';
    protected static $_name = "CheckMalicousAddress_200_response";
    protected static $_definition = [
        "status" => ["status", "string", null, "getStatus", "setStatus", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * CheckMalicousAddress200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getStatusAllowableValues(): array {
        return [
            self::STATUS_VALID,
            self::STATUS_INVALID,
        ];
    }

    /**
     * Get status
     *
     * @return string|null
     */
    public function getStatus(): ?string {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param string|null $status Whether address is malicous or not
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatus(?string $status) {
        return $this->_set("status", $status);
    }
}