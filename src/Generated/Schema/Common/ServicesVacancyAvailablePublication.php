<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ServicesVacancyAvailablePublication.
 */
class ServicesVacancyAvailablePublication extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['publication_variants' => 'publication_variants'];

    protected const REQUIRED_FIELDS = ['publication_variants'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['publication_variants' => [\and_y87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications> Список доступных типов публикаций */
    public array $publication_variants;
}
