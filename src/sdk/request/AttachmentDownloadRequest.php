<?php
namespace Qiyuesuo\sdk\request;

use Qiyuesuo\sdk\param\ParamSwitcher;
use Qiyuesuo\sdk\http\HttpParameter;

class AttachmentDownloadRequest extends SdkRequest {

    const ATTACHMENT_DOWNLOAD = "/v2/attachment/download";  // 附件下载接口地址

    private $contractId;        // 合同ID
    private $bizId;             // 业务ID

    public function getUrl() {
        return self::ATTACHMENT_DOWNLOAD;
    }

    public function getHttpParamers() {
        $paramSwitcher = ParamSwitcher::instanceParam();
        $paramSwitcher->addParam('contractId', $this->contractId);
        $paramSwitcher->addParam('bizId', $this->bizId);
        $httpParameters = HttpParameter::httpGetParamer();
        $httpParameters->setParams($paramSwitcher->getParams());
        return $httpParameters;

    }

    /**
     * @return mixed
     */
    public function getContractId()
    {
        return $this->contractId;
    }

    /**
     * @param mixed $contractId
     */
    public function setContractId($contractId)
    {
        $this->contractId = $contractId;
    }

    /**
     * @return mixed
     */
    public function getBizId()
    {
        return $this->bizId;
    }

    /**
     * @param mixed $bizId
     */
    public function setBizId($bizId)
    {
        $this->bizId = $bizId;
    }

}