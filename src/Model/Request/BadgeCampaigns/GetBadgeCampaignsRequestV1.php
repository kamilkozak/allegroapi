<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.08.2019
 * Time: 10:42
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BadgeCampaigns;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetBadgeCampaignsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/badge-campaigns', $queryParameters),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
