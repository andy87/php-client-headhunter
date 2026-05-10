<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVideoVacancyVideo.
 */
class VacancyVideoVacancyVideo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['upload_id' => 'upload_id', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['upload_id', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор видео */
    public string $upload_id;

    /** @var string Ссылка на видео */
    public string $url;
}
