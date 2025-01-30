<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\OrgModel $org
 *
 * @api
 */
class OrgOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "org" => "\Kroscom\OneRosterAPI\Components\OrgModel"
    ];
}
