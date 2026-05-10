<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesAdditionalVacancyFields.
 */
class VacanciesAdditionalVacancyFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['counters' => 'counters', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'snippet' => 'snippet', 'sort_point_distance' => 'sort_point_distance'];

    protected const REQUIRED_FIELDS = ['snippet'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['counters' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCounters::class, 'employment' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput::class, 'employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'experience' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput::class, 'snippet' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySnippet::class, 'sort_point_distance' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCounters|null Schema field counters */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCounters $counters = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput|null Schema field employment */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput $employment = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null Schema field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput $employment_form = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput|null Schema field experience */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput $experience = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySnippet Дополнительные текстовые снипеты (отрывки) по найденной вакансии. Если в тексте снипета встретилась поисковая фраза (параметр `text`), она будет подсвечена тегом `highlighttext` */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancySnippet $snippet;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance|null Schema field sort_point_distance */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance $sort_point_distance = null;
}
