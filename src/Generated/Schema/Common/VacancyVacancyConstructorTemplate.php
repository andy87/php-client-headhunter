<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVacancyConstructorTemplate.
 */
class VacancyVacancyConstructorTemplate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bottom_picture' => 'bottom_picture', 'id' => 'id', 'name' => 'name', 'top_picture' => 'top_picture'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['bottom_picture', 'top_picture'];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Информация по нижней картинке шаблона */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $bottom_picture = null;

    /** @var float|null ID шаблона */
    public ?float $id = null;

    /** @var string|null Название шаблона */
    public ?string $name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Информация по верхней картинке шаблона */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $top_picture = null;
}
