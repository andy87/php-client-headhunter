<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesEducationalInstitutionItem.
 */
class IncludesEducationalInstitutionItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['acronym' => 'acronym', 'area' => 'area', 'id' => 'id', 'synonyms' => 'synonyms', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['id', 'text', 'area'];

    protected const NULLABLE_FIELDS = ['acronym', 'synonyms'];

    protected const CASTS = ['area' => \Andy87\ClientsHh\Generated\Schema\Common\SuggestsArea::class];

    /** @var string|null Сокращенное название учебного заведения */
    public ?string $acronym = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\SuggestsArea Регион */
    public \Andy87\ClientsHh\Generated\Schema\Common\SuggestsArea $area;

    /** @var string Идентификатор учебного заведения */
    public string $id;

    /** @var string|null Альтернативное название учебного заведения */
    public ?string $synonyms = null;

    /** @var string Полное название учебного заведения */
    public string $text;
}
