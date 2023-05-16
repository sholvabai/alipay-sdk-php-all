<?php
/**
 * FaceMachineInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-04-19
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * FaceMachineInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FaceMachineInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FaceMachineInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cameraDriveVer' => 'string',
        'cameraModel' => 'string',
        'cameraName' => 'string',
        'cameraVer' => 'string',
        'ext' => 'string',
        'machineCode' => 'string',
        'machineModel' => 'string',
        'machineVer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cameraDriveVer' => null,
        'cameraModel' => null,
        'cameraName' => null,
        'cameraVer' => null,
        'ext' => null,
        'machineCode' => null,
        'machineModel' => null,
        'machineVer' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cameraDriveVer' => 'camera_drive_ver',
        'cameraModel' => 'camera_model',
        'cameraName' => 'camera_name',
        'cameraVer' => 'camera_ver',
        'ext' => 'ext',
        'machineCode' => 'machine_code',
        'machineModel' => 'machine_model',
        'machineVer' => 'machine_ver'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cameraDriveVer' => 'setCameraDriveVer',
        'cameraModel' => 'setCameraModel',
        'cameraName' => 'setCameraName',
        'cameraVer' => 'setCameraVer',
        'ext' => 'setExt',
        'machineCode' => 'setMachineCode',
        'machineModel' => 'setMachineModel',
        'machineVer' => 'setMachineVer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cameraDriveVer' => 'getCameraDriveVer',
        'cameraModel' => 'getCameraModel',
        'cameraName' => 'getCameraName',
        'cameraVer' => 'getCameraVer',
        'ext' => 'getExt',
        'machineCode' => 'getMachineCode',
        'machineModel' => 'getMachineModel',
        'machineVer' => 'getMachineVer'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['cameraDriveVer'] = $data['cameraDriveVer'] ?? null;
        $this->container['cameraModel'] = $data['cameraModel'] ?? null;
        $this->container['cameraName'] = $data['cameraName'] ?? null;
        $this->container['cameraVer'] = $data['cameraVer'] ?? null;
        $this->container['ext'] = $data['ext'] ?? null;
        $this->container['machineCode'] = $data['machineCode'] ?? null;
        $this->container['machineModel'] = $data['machineModel'] ?? null;
        $this->container['machineVer'] = $data['machineVer'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cameraDriveVer
     *
     * @return string|null
     */
    public function getCameraDriveVer()
    {
        return $this->container['cameraDriveVer'];
    }

    /**
     * Sets cameraDriveVer
     *
     * @param string|null $cameraDriveVer 摄像头驱动版本号
     *
     * @return self
     */
    public function setCameraDriveVer($cameraDriveVer)
    {
        $this->container['cameraDriveVer'] = $cameraDriveVer;

        return $this;
    }

    /**
     * Gets cameraModel
     *
     * @return string|null
     */
    public function getCameraModel()
    {
        return $this->container['cameraModel'];
    }

    /**
     * Sets cameraModel
     *
     * @param string|null $cameraModel 摄像头型号
     *
     * @return self
     */
    public function setCameraModel($cameraModel)
    {
        $this->container['cameraModel'] = $cameraModel;

        return $this;
    }

    /**
     * Gets cameraName
     *
     * @return string|null
     */
    public function getCameraName()
    {
        return $this->container['cameraName'];
    }

    /**
     * Sets cameraName
     *
     * @param string|null $cameraName 摄像头名称
     *
     * @return self
     */
    public function setCameraName($cameraName)
    {
        $this->container['cameraName'] = $cameraName;

        return $this;
    }

    /**
     * Gets cameraVer
     *
     * @return string|null
     */
    public function getCameraVer()
    {
        return $this->container['cameraVer'];
    }

    /**
     * Sets cameraVer
     *
     * @param string|null $cameraVer 摄像头版本号
     *
     * @return self
     */
    public function setCameraVer($cameraVer)
    {
        $this->container['cameraVer'] = $cameraVer;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return string|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param string|null $ext 扩展信息
     *
     * @return self
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets machineCode
     *
     * @return string|null
     */
    public function getMachineCode()
    {
        return $this->container['machineCode'];
    }

    /**
     * Sets machineCode
     *
     * @param string|null $machineCode 机具编码
     *
     * @return self
     */
    public function setMachineCode($machineCode)
    {
        $this->container['machineCode'] = $machineCode;

        return $this;
    }

    /**
     * Gets machineModel
     *
     * @return string|null
     */
    public function getMachineModel()
    {
        return $this->container['machineModel'];
    }

    /**
     * Sets machineModel
     *
     * @param string|null $machineModel 机具型号
     *
     * @return self
     */
    public function setMachineModel($machineModel)
    {
        $this->container['machineModel'] = $machineModel;

        return $this;
    }

    /**
     * Gets machineVer
     *
     * @return string|null
     */
    public function getMachineVer()
    {
        return $this->container['machineVer'];
    }

    /**
     * Sets machineVer
     *
     * @param string|null $machineVer 机具版本号
     *
     * @return self
     */
    public function setMachineVer($machineVer)
    {
        $this->container['machineVer'] = $machineVer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

