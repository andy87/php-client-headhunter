<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyStatsItem.
 */
class VacanciesVacancyStatsItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date' => 'date', 'responses' => 'responses', 'views' => 'views'];

    protected const REQUIRED_FIELDS = ['date'];

    protected const NULLABLE_FIELDS = ['responses', 'views'];

    protected const CASTS = [];

    /** @var string Дата в формате `YYYY-MM-DD` */
    public string $date;

    /** @var float|null Количество откликов на вакансию. `null` если дата в будущем или данных на эту дату нет */
    public ?float $responses = null;

    /** @var float|null Количество просмотров вакансии. `null` если дата в будущем или данных на эту дату нет */
    public ?float $views = null;
}
