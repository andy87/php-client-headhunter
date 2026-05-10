<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsOwnerComments.
 */
class ResumeObjectsOwnerComments extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['counters' => 'counters', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['url', 'counters'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['counters' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerCommentsCounters::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerCommentsCounters Информация о количестве комментариев */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerCommentsCounters $counters;

    /** @var string URL, на который нужно сделать GET-запрос, чтобы получить список комментариев */
    public string $url;
}
