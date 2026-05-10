<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumesResumeNegotiationsHistoryVacancy.
 */
class ResumesResumeNegotiationsHistoryVacancy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['archived' => 'archived', 'can_edit' => 'can_edit', 'id' => 'id', 'items' => 'items', 'messages_url' => 'messages_url', 'name' => 'name', 'negotiations_url' => 'negotiations_url', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'url', 'archived', 'can_edit', 'items', 'negotiations_url', 'messages_url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancyItem::class]];

    /** @var bool Признак того, что вакансия находится в архиве */
    public bool $archived;

    /** @var bool Признак того, что менеджер может редактировать данные вакансии, а также работать с информацией об откликах/приглашениях по этой вакансии */
    public bool $can_edit;

    /** @var string Уникальный идентификатор вакансии */
    public string $id;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancyItem> Список последних изменений состояний откликов/приглашений по указанному резюме и данной вакансии */
    public array $items;

    /** @var string URL, на который необходимо делать GET-запрос для получения [списка сообщений в отклике/приглашении](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-messages). Если `can_edit` равно `false`, значение поля должно игнорироваться */
    public string $messages_url;

    /** @var string Название вакансии */
    public string $name;

    /** @var string URL, на который необходимо делать GET-запрос для получения [данных об отклике/приглашении](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-item). Если `can_edit` равно `false`, значение поля должно игнорироваться */
    public string $negotiations_url;

    /** @var string URL, на который необходимо делать GET-запрос для [получения данных о вакансии](#tag/Upravlenie-vakansiyami/operation/get-vacancy) */
    public string $url;
}
