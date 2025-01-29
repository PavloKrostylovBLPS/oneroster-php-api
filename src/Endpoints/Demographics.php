<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\DemographicOutputModel;
use Kroscom\OneRosterAPI\Components\DemographicsOutputModel;

/**
 * @api
 */
class Demographics extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/demographics/{id}";

    /**
     * Returns a collection of user's demographic data.
     *
     * @return \Kroscom\OneRosterAPI\Components\DemographicsOutputModel
     *   Success
     */
    public function get(): DemographicsOutputModel
    {
        return new DemographicsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single user's demographic data for the specified ```id```..
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the user
     *
     * @return \Kroscom\OneRosterAPI\Components\DemographicOutputModel
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): DemographicOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new DemographicOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
