<?php
/**
 * Created by PhpStorm.
 * User: enesdayanc
 * Date: 11/08/2017
 * Time: 17:21
 */

namespace Enesdayanc\VPosEst\Setting;


class Finansbank extends Setting
{
    private $host = "www.fbwebpos.com";

    public function getThreeDPostUrl()
    {
        return "https://" . $this->host . "/fim/est3Dgate";
    }

    public function getAuthorizeUrl()
    {
        return "https://" . $this->host . "/servlet/cc5ApiServer";
    }

    public function getCaptureUrl()
    {
        return "https://" . $this->host . "/servlet/cc5ApiServer";
    }

    public function getPurchaseUrl()
    {
        return "https://" . $this->host . "/servlet/cc5ApiServer";
    }

    public function getRefundUrl()
    {
        return "https://" . $this->host . "/servlet/cc5ApiServer";
    }

    public function getVoidUrl()
    {
        return "https://" . $this->host . "/servlet/cc5ApiServer";
    }
}