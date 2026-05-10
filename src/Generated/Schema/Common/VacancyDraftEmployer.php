<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftEmployer.
 */
class VacancyDraftEmployer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'id' => 'id', 'logo_urls' => 'logo_urls', 'name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'logo_urls', 'alternate_url', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Url для просмотра работодателя на сайте */
    public string $alternate_url;

    /** @var string Идентификатор работодателя */
    public string $id;

    /** @var array<string, mixed> Ссылки на логотипы работодателя разных размеров */
    public array $logo_urls;

    /** @var string Название работодателя */
    public string $name;

    /** @var string Url для просмотра работодателя */
    public string $url;
}
