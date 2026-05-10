<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ServicesVacancyAvailablePublication.
 */
class ServicesVacancyAvailablePublication extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['publication_variants' => 'publication_variants'];

    protected const REQUIRED_FIELDS = ['publication_variants'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['publication_variants' => [\Andy87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications> Список доступных типов публикаций */
    public array $publication_variants;
}
