<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsEmployerNegotiation.
 */
class NegotiationsEmployerNegotiation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['applicant_question_state' => 'applicant_question_state', 'chat_id' => 'chat_id', 'counters' => 'counters', 'created_at' => 'created_at', 'has_updates' => 'has_updates', 'id' => 'id', 'messages_url' => 'messages_url', 'messaging_status' => 'messaging_status', 'professional_roles' => 'professional_roles', 'source' => 'source', 'state' => 'state', 'updated_at' => 'updated_at', 'viewed_by_opponent' => 'viewed_by_opponent', 'actions' => 'actions', 'employer_state' => 'employer_state', 'funnel_stage' => 'funnel_stage', 'tags' => 'tags', 'templates' => 'templates', 'test_result' => 'test_result', 'resume' => 'resume', 'vacancy' => 'vacancy'];

    protected const REQUIRED_FIELDS = ['id', 'state', 'created_at', 'updated_at', 'has_updates', 'viewed_by_opponent', 'messaging_status'];

    protected const NULLABLE_FIELDS = ['funnel_stage', 'test_result', 'resume', 'vacancy'];

    protected const CASTS = ['counters' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsCounters::class, 'has_updates' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyHasUpdates::class, 'state' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'actions' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions::class], 'employer_state' => \and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployersState::class, 'tags' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesId::class], 'templates' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyTemplates::class]];

    /** @var bool|null Является ли вопросом до отклика */
    public ?bool $applicant_question_state = null;

    /** @var float|null Идентификатор чата */
    public ?float $chat_id = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsCounters|null Schema field counters */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsCounters $counters = null;

    /** @var string Дата и время создания отклика/приглашения */
    public string $created_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyHasUpdates Schema field has_updates */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyHasUpdates $has_updates;

    /** @var string Идентификатор отклика/приглашения */
    public string $id;

    /** @var string|null URL, на который необходимо делать GET-запрос для получения [списка сообщений в отклике/приглашении](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-messages). Если `can_edit` равно `false`, значение поля должно игнорироваться */
    public ?string $messages_url = null;

    /** @var string Текущий статус переписки.

Возможные значения приведены в поле `messaging_status` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public string $messaging_status;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRoles|null Schema field professional_roles */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRoles $professional_roles = null;

    /** @var string|null Источник отклика/приглашения */
    public ?string $source = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Текущее состояние отклика/приглашения.

Возможные значения приведены в поле `negotiations_state` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $state;

    /** @var string Дата и время последнего обновления отклика/приглашения */
    public string $updated_at;

    /** @var bool Был ли отклик/приглашение просмотрен получателем */
    public bool $viewed_by_opponent;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions>|null Возможные [действия по отклику/приглашению](#tag/Otklikipriglasheniya-rabotodatelya/operation/change-negotiation-action)
 */
    public ?array $actions = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployersState|null Schema field employer_state */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployersState $employer_state = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployersFunnelStage|null Информация об этапе воронки найма */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\EmployersFunnelStage $funnel_stage = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesId>|null Теги к работодательскому отклику */
    public ?array $tags = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyTemplates>|null Шаблоны писем */
    public ?array $templates = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Результат выполнения [теста](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-test-results), прикрепленного к вакансии
 */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $test_result = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Короткое представление резюме */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $resume = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesNegotiationsVacancyShort|null Короткое представление вакансии */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesNegotiationsVacancyShort $vacancy = null;
}
