<?php
/**
 * AlipayMarketingCardTemplateModifyModel
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
 * AlipayMarketingCardTemplateModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCardTemplateModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCardTemplateModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizNoPrefix' => 'string',
        'bizNoSuffixLen' => 'string',
        'cardActionList' => '\Alipay\OpenAPISDK\Model\TemplateActionInfoDTO[]',
        'cardLevelConf' => '\Alipay\OpenAPISDK\Model\TemplateCardLevelConfDTO[]',
        'cardSpecTag' => 'string',
        'columnInfoList' => '\Alipay\OpenAPISDK\Model\TemplateColumnInfoDTO[]',
        'fieldRuleList' => '\Alipay\OpenAPISDK\Model\TemplateFieldRuleDTO[]',
        'mdcodeNotifyConf' => '\Alipay\OpenAPISDK\Model\TemplateMdcodeNotifyConfDTO',
        'openCardConf' => '\Alipay\OpenAPISDK\Model\TemplateOpenCardConfDTO',
        'paidOuterCardConf' => '\Alipay\OpenAPISDK\Model\PaidOuterCardTemplateConfDTO',
        'pubChannels' => '\Alipay\OpenAPISDK\Model\PubChannelDTO[]',
        'requestId' => 'string',
        'shopIds' => 'string[]',
        'spiAppId' => 'string',
        'templateBenefitInfo' => '\Alipay\OpenAPISDK\Model\TemplateBenefitInfoDTO[]',
        'templateId' => 'string',
        'templateStyleInfo' => '\Alipay\OpenAPISDK\Model\TemplateStyleInfoDTO',
        'writeOffType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizNoPrefix' => null,
        'bizNoSuffixLen' => null,
        'cardActionList' => null,
        'cardLevelConf' => null,
        'cardSpecTag' => null,
        'columnInfoList' => null,
        'fieldRuleList' => null,
        'mdcodeNotifyConf' => null,
        'openCardConf' => null,
        'paidOuterCardConf' => null,
        'pubChannels' => null,
        'requestId' => null,
        'shopIds' => null,
        'spiAppId' => null,
        'templateBenefitInfo' => null,
        'templateId' => null,
        'templateStyleInfo' => null,
        'writeOffType' => null
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
        'bizNoPrefix' => 'biz_no_prefix',
        'bizNoSuffixLen' => 'biz_no_suffix_len',
        'cardActionList' => 'card_action_list',
        'cardLevelConf' => 'card_level_conf',
        'cardSpecTag' => 'card_spec_tag',
        'columnInfoList' => 'column_info_list',
        'fieldRuleList' => 'field_rule_list',
        'mdcodeNotifyConf' => 'mdcode_notify_conf',
        'openCardConf' => 'open_card_conf',
        'paidOuterCardConf' => 'paid_outer_card_conf',
        'pubChannels' => 'pub_channels',
        'requestId' => 'request_id',
        'shopIds' => 'shop_ids',
        'spiAppId' => 'spi_app_id',
        'templateBenefitInfo' => 'template_benefit_info',
        'templateId' => 'template_id',
        'templateStyleInfo' => 'template_style_info',
        'writeOffType' => 'write_off_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizNoPrefix' => 'setBizNoPrefix',
        'bizNoSuffixLen' => 'setBizNoSuffixLen',
        'cardActionList' => 'setCardActionList',
        'cardLevelConf' => 'setCardLevelConf',
        'cardSpecTag' => 'setCardSpecTag',
        'columnInfoList' => 'setColumnInfoList',
        'fieldRuleList' => 'setFieldRuleList',
        'mdcodeNotifyConf' => 'setMdcodeNotifyConf',
        'openCardConf' => 'setOpenCardConf',
        'paidOuterCardConf' => 'setPaidOuterCardConf',
        'pubChannels' => 'setPubChannels',
        'requestId' => 'setRequestId',
        'shopIds' => 'setShopIds',
        'spiAppId' => 'setSpiAppId',
        'templateBenefitInfo' => 'setTemplateBenefitInfo',
        'templateId' => 'setTemplateId',
        'templateStyleInfo' => 'setTemplateStyleInfo',
        'writeOffType' => 'setWriteOffType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizNoPrefix' => 'getBizNoPrefix',
        'bizNoSuffixLen' => 'getBizNoSuffixLen',
        'cardActionList' => 'getCardActionList',
        'cardLevelConf' => 'getCardLevelConf',
        'cardSpecTag' => 'getCardSpecTag',
        'columnInfoList' => 'getColumnInfoList',
        'fieldRuleList' => 'getFieldRuleList',
        'mdcodeNotifyConf' => 'getMdcodeNotifyConf',
        'openCardConf' => 'getOpenCardConf',
        'paidOuterCardConf' => 'getPaidOuterCardConf',
        'pubChannels' => 'getPubChannels',
        'requestId' => 'getRequestId',
        'shopIds' => 'getShopIds',
        'spiAppId' => 'getSpiAppId',
        'templateBenefitInfo' => 'getTemplateBenefitInfo',
        'templateId' => 'getTemplateId',
        'templateStyleInfo' => 'getTemplateStyleInfo',
        'writeOffType' => 'getWriteOffType'
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
        $this->container['bizNoPrefix'] = $data['bizNoPrefix'] ?? null;
        $this->container['bizNoSuffixLen'] = $data['bizNoSuffixLen'] ?? null;
        $this->container['cardActionList'] = $data['cardActionList'] ?? null;
        $this->container['cardLevelConf'] = $data['cardLevelConf'] ?? null;
        $this->container['cardSpecTag'] = $data['cardSpecTag'] ?? null;
        $this->container['columnInfoList'] = $data['columnInfoList'] ?? null;
        $this->container['fieldRuleList'] = $data['fieldRuleList'] ?? null;
        $this->container['mdcodeNotifyConf'] = $data['mdcodeNotifyConf'] ?? null;
        $this->container['openCardConf'] = $data['openCardConf'] ?? null;
        $this->container['paidOuterCardConf'] = $data['paidOuterCardConf'] ?? null;
        $this->container['pubChannels'] = $data['pubChannels'] ?? null;
        $this->container['requestId'] = $data['requestId'] ?? null;
        $this->container['shopIds'] = $data['shopIds'] ?? null;
        $this->container['spiAppId'] = $data['spiAppId'] ?? null;
        $this->container['templateBenefitInfo'] = $data['templateBenefitInfo'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
        $this->container['templateStyleInfo'] = $data['templateStyleInfo'] ?? null;
        $this->container['writeOffType'] = $data['writeOffType'] ?? null;
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
     * Gets bizNoPrefix
     *
     * @return string|null
     */
    public function getBizNoPrefix()
    {
        return $this->container['bizNoPrefix'];
    }

    /**
     * Sets bizNoPrefix
     *
     * @param string|null $bizNoPrefix 业务卡号前缀，由商户指定  支付宝业务卡号生成规则：biz_no_prefix(商户指定)卡号前缀 + biz_no_suffix(实时生成）卡号后缀
     *
     * @return self
     */
    public function setBizNoPrefix($bizNoPrefix)
    {
        $this->container['bizNoPrefix'] = $bizNoPrefix;

        return $this;
    }

    /**
     * Gets bizNoSuffixLen
     *
     * @return string|null
     */
    public function getBizNoSuffixLen()
    {
        return $this->container['bizNoSuffixLen'];
    }

    /**
     * Sets bizNoSuffixLen
     *
     * @param string|null $bizNoSuffixLen 业务卡号后缀长度，与biz_no_prefix配合，扣除系统预留2位，剩下对应seq长度。在生成卡号时，若seq位数不足前置补0，若seq位数超出则以实际为准。举例：设为10，其中8位用于生成seq，可覆盖1亿用户，即使seq超过1亿，生成卡号也不报错，但总长度不得超过32位。建议按需设置合适的值，以获得长度一致的业务卡号，建议长度20，性能更好。
     *
     * @return self
     */
    public function setBizNoSuffixLen($bizNoSuffixLen)
    {
        $this->container['bizNoSuffixLen'] = $bizNoSuffixLen;

        return $this;
    }

    /**
     * Gets cardActionList
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateActionInfoDTO[]|null
     */
    public function getCardActionList()
    {
        return $this->container['cardActionList'];
    }

    /**
     * Sets cardActionList
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateActionInfoDTO[]|null $cardActionList 卡行动点配置；  行动点，即用户可点击跳转的区块，类似按钮控件的交互；  单张卡最多定制4个行动点。
     *
     * @return self
     */
    public function setCardActionList($cardActionList)
    {
        $this->container['cardActionList'] = $cardActionList;

        return $this;
    }

    /**
     * Gets cardLevelConf
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateCardLevelConfDTO[]|null
     */
    public function getCardLevelConf()
    {
        return $this->container['cardLevelConf'];
    }

    /**
     * Sets cardLevelConf
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateCardLevelConfDTO[]|null $cardLevelConf 卡级别配置
     *
     * @return self
     */
    public function setCardLevelConf($cardLevelConf)
    {
        $this->container['cardLevelConf'] = $cardLevelConf;

        return $this;
    }

    /**
     * Gets cardSpecTag
     *
     * @return string|null
     */
    public function getCardSpecTag()
    {
        return $this->container['cardSpecTag'];
    }

    /**
     * Sets cardSpecTag
     *
     * @param string|null $cardSpecTag 卡特定标签，只供特定业务使用，通常接入无需关注
     *
     * @return self
     */
    public function setCardSpecTag($cardSpecTag)
    {
        $this->container['cardSpecTag'] = $cardSpecTag;

        return $this;
    }

    /**
     * Gets columnInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateColumnInfoDTO[]|null
     */
    public function getColumnInfoList()
    {
        return $this->container['columnInfoList'];
    }

    /**
     * Sets columnInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateColumnInfoDTO[]|null $columnInfoList 栏位信息（卡包详情页面展现的栏位）
     *
     * @return self
     */
    public function setColumnInfoList($columnInfoList)
    {
        $this->container['columnInfoList'] = $columnInfoList;

        return $this;
    }

    /**
     * Gets fieldRuleList
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateFieldRuleDTO[]|null
     */
    public function getFieldRuleList()
    {
        return $this->container['fieldRuleList'];
    }

    /**
     * Sets fieldRuleList
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateFieldRuleDTO[]|null $fieldRuleList 字段规则列表，会员卡开卡过程中，会员卡信息的生成规则， 例如：卡有效期为开卡后两年内有效，则设置为：DATE_IN_FUTURE 注意：商家会员卡场景不支持修改该内容。
     *
     * @return self
     */
    public function setFieldRuleList($fieldRuleList)
    {
        $this->container['fieldRuleList'] = $fieldRuleList;

        return $this;
    }

    /**
     * Gets mdcodeNotifyConf
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateMdcodeNotifyConfDTO|null
     */
    public function getMdcodeNotifyConf()
    {
        return $this->container['mdcodeNotifyConf'];
    }

    /**
     * Sets mdcodeNotifyConf
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateMdcodeNotifyConfDTO|null $mdcodeNotifyConf mdcodeNotifyConf
     *
     * @return self
     */
    public function setMdcodeNotifyConf($mdcodeNotifyConf)
    {
        $this->container['mdcodeNotifyConf'] = $mdcodeNotifyConf;

        return $this;
    }

    /**
     * Gets openCardConf
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateOpenCardConfDTO|null
     */
    public function getOpenCardConf()
    {
        return $this->container['openCardConf'];
    }

    /**
     * Sets openCardConf
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateOpenCardConfDTO|null $openCardConf openCardConf
     *
     * @return self
     */
    public function setOpenCardConf($openCardConf)
    {
        $this->container['openCardConf'] = $openCardConf;

        return $this;
    }

    /**
     * Gets paidOuterCardConf
     *
     * @return \Alipay\OpenAPISDK\Model\PaidOuterCardTemplateConfDTO|null
     */
    public function getPaidOuterCardConf()
    {
        return $this->container['paidOuterCardConf'];
    }

    /**
     * Sets paidOuterCardConf
     *
     * @param \Alipay\OpenAPISDK\Model\PaidOuterCardTemplateConfDTO|null $paidOuterCardConf paidOuterCardConf
     *
     * @return self
     */
    public function setPaidOuterCardConf($paidOuterCardConf)
    {
        $this->container['paidOuterCardConf'] = $paidOuterCardConf;

        return $this;
    }

    /**
     * Gets pubChannels
     *
     * @return \Alipay\OpenAPISDK\Model\PubChannelDTO[]|null
     */
    public function getPubChannels()
    {
        return $this->container['pubChannels'];
    }

    /**
     * Sets pubChannels
     *
     * @param \Alipay\OpenAPISDK\Model\PubChannelDTO[]|null $pubChannels 卡模板投放渠道
     *
     * @return self
     */
    public function setPubChannels($pubChannels)
    {
        $this->container['pubChannels'] = $pubChannels;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string|null $requestId 请求 ID，商户自定义且需确保每次请求唯一。
     *
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets shopIds
     *
     * @return string[]|null
     */
    public function getShopIds()
    {
        return $this->container['shopIds'];
    }

    /**
     * Sets shopIds
     *
     * @param string[]|null $shopIds 会员卡上架门店 id（支付宝门店id），即发放会员卡的商家门店id。不传则保持创建模板时信息。 注意：不支持删除已有shop_id，仅支持新增。
     *
     * @return self
     */
    public function setShopIds($shopIds)
    {
        $this->container['shopIds'] = $shopIds;

        return $this;
    }

    /**
     * Gets spiAppId
     *
     * @return string|null
     */
    public function getSpiAppId()
    {
        return $this->container['spiAppId'];
    }

    /**
     * Sets spiAppId
     *
     * @param string|null $spiAppId spi_app_id：若使用openspi模式开卡，该字段必填，为实现spi.alipay.user.opencard.get接口的app_id
     *
     * @return self
     */
    public function setSpiAppId($spiAppId)
    {
        $this->container['spiAppId'] = $spiAppId;

        return $this;
    }

    /**
     * Gets templateBenefitInfo
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateBenefitInfoDTO[]|null
     */
    public function getTemplateBenefitInfo()
    {
        return $this->container['templateBenefitInfo'];
    }

    /**
     * Sets templateBenefitInfo
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateBenefitInfoDTO[]|null $templateBenefitInfo 权益信息，  1、在卡包的卡详情页面会自动添加权益栏位，展现会员卡特权，  2、如果添加门店渠道，则可在门店页展现会员卡的权益
     *
     * @return self
     */
    public function setTemplateBenefitInfo($templateBenefitInfo)
    {
        $this->container['templateBenefitInfo'] = $templateBenefitInfo;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 会员卡模板id。调用alipay.marketing.card.template.create（会员卡模板创建接口）创建模板后同步返回。
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets templateStyleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateStyleInfoDTO|null
     */
    public function getTemplateStyleInfo()
    {
        return $this->container['templateStyleInfo'];
    }

    /**
     * Sets templateStyleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateStyleInfoDTO|null $templateStyleInfo templateStyleInfo
     *
     * @return self
     */
    public function setTemplateStyleInfo($templateStyleInfo)
    {
        $this->container['templateStyleInfo'] = $templateStyleInfo;

        return $this;
    }

    /**
     * Gets writeOffType
     *
     * @return string|null
     */
    public function getWriteOffType()
    {
        return $this->container['writeOffType'];
    }

    /**
     * Sets writeOffType
     *
     * @param string|null $writeOffType 卡包详情页面中展现出的卡码（可用于扫码核销）  (1) 静态码 qrcode: 二维码，扫码得商户开卡传入的external_card_no barcode: 条形码，扫码得商户开卡传入的external_card_no  (2) 动态码-支付宝生成码值(动态码会在2分钟左右后过期) dqrcode: 动态二维码，扫码得到的码值可配合会员卡查询接口使用 dbarcode: 动态条形码，扫码得到的码值可配合会员卡查询接口使用  (3) 动态码-商家自主生成码值（码值、时效性都由商户控制） mdqrcode: 商户动态二维码，扫码得商户自主传入的码值 mdbarcode: 商户动态条码，扫码得商户自主传入的码值。 如需使用商户动态码，请联系支付宝技术支持获取相关文档。
     *
     * @return self
     */
    public function setWriteOffType($writeOffType)
    {
        $this->container['writeOffType'] = $writeOffType;

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

