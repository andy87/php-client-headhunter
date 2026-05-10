<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationCommonFields.
 */
class NegotiationsNegotiationCommonFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actions' => 'actions', 'employer_state' => 'employer_state', 'funnel_stage' => 'funnel_stage', 'tags' => 'tags', 'templates' => 'templates', 'test_result' => 'test_result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['funnel_stage', 'test_result'];

    protected const CASTS = ['actions' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions::class], 'employer_state' => \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState::class, 'tags' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class], 'templates' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyTemplates::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions>|null Возможные [действия по отклику/приглашению](#tag/Otklikipriglasheniya-rabotodatelya/operation/change-negotiation-action)
 */
    public ?array $actions = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState|null Schema field employer_state */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState $employer_state = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployersFunnelStage|null Информация об этапе воронки найма */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployersFunnelStage $funnel_stage = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesId>|null Теги к работодательскому отклику */
    public ?array $tags = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyTemplates>|null Шаблоны писем */
    public ?array $templates = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Результат выполнения [теста](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-test-results), прикрепленного к вакансии
 */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $test_result = null;
}
