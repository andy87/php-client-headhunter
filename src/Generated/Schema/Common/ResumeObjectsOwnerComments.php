<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsOwnerComments.
 */
class ResumeObjectsOwnerComments extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['counters' => 'counters', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['url', 'counters'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['counters' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerCommentsCounters::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerCommentsCounters Информация о количестве комментариев */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerCommentsCounters $counters;

    /** @var string URL, на который нужно сделать GET-запрос, чтобы получить список комментариев */
    public string $url;
}
