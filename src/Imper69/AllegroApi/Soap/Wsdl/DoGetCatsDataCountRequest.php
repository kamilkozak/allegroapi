<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class DoGetCatsDataCountRequest
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryId
     * @param int $localVersion
     * @param string $webapiKey
     */
    public function __construct($countryId = null, $localVersion = null, $webapiKey = null)
    {
      $this->countryId = $countryId;
      $this->localVersion = $localVersion;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoGetCatsDataCountRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
      return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoGetCatsDataCountRequest
     */
    public function setLocalVersion($localVersion)
    {
      $this->localVersion = $localVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoGetCatsDataCountRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
