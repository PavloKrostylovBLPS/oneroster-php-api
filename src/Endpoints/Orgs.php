<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\OrgOutputModel;
use Kroscom\OneRosterAPI\Components\OrgsOutputModel;

/**
 * @api
 */
class Orgs extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/orgs/{id}";

    /**
     * Returns a collection of organizations.
     *
     * @return \Kroscom\OneRosterAPI\Components\OrgsOutputModel OK - It was
     *   possible to read the collection.
     */
    public function get(): OrgsOutputModel
    {
        return new OrgsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific org.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the org
     *
     * @return \Kroscom\OneRosterAPI\Components\OrgOutputModel OK - It was
     *   possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): OrgOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new OrgOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
