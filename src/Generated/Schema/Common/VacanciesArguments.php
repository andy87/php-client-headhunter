<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesArguments.
 */
class VacanciesArguments extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['arguments' => 'arguments'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['arguments'];

    protected const CASTS = ['arguments' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesArgumentItem::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesArgumentItem>|null Массив параметров поиска, переданных в запросе.

Возвращается только если в запросе передан параметр `describe_arguments=true`. В массиве выдаются только те параметры, которые влияют на поиск вакансий. Неизвестные параметры игнорируются. Элемент списка с одним значением `argument` может повторяться несколько раз, если параметр имеет несколько значений
 */
    public ?array $arguments = null;
}
