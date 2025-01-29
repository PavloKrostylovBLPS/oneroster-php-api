<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Result
 *
 * @property ?\Kroscom\OneRosterAPI\Components\ResultModelSvc[] $results
 *   Results
 * @property ?\Kroscom\OneRosterAPI\Components\StatusInfoModel[]
 *   $status_info_set List of status messages
 *
 * @api
 */
class ResultsOutputModelSvc extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "results" => "\Kroscom\OneRosterAPI\Components\ResultModelSvc[]",
        "status_info_set" => "\Kroscom\OneRosterAPI\Components\StatusInfoModel[]",
    ];
}
