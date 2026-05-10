<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesAdditionalVacancyFields.
 */
class VacanciesAdditionalVacancyFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['counters' => 'counters', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'snippet' => 'snippet', 'sort_point_distance' => 'sort_point_distance'];

    protected const REQUIRED_FIELDS = ['snippet'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['counters' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCounters::class, 'employment' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput::class, 'employment_form' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'experience' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput::class, 'snippet' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySnippet::class, 'sort_point_distance' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCounters|null Schema field counters */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCounters $counters = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput|null Schema field employment */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput $employment = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null Schema field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput $employment_form = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput|null Schema field experience */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput $experience = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySnippet Дополнительные текстовые снипеты (отрывки) по найденной вакансии. Если в тексте снипета встретилась поисковая фраза (параметр `text`), она будет подсвечена тегом `highlighttext` */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancySnippet $snippet;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance|null Schema field sort_point_distance */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance $sort_point_distance = null;
}
