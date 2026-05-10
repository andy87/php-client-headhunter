<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeResumeNano.
 */
class ResumeResumeNano extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'id' => 'id', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['id', 'title', 'alternate_url'];

    protected const NULLABLE_FIELDS = ['title'];

    protected const CASTS = [];

    /** @var string URL резюме на сайте */
    public string $alternate_url;

    /** @var string Идентификатор резюме */
    public string $id;

    /** @var string|null Желаемая должность */
    public ?string $title;
}
