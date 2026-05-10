<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyNegotiationActions.
 */
class VacancyNegotiationActions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['arguments' => 'arguments', 'enabled' => 'enabled', 'hidden' => 'hidden', 'id' => 'id', 'method' => 'method', 'name' => 'name', 'resulting_employer_state' => 'resulting_employer_state', 'sub_actions' => 'sub_actions', 'templates' => 'templates', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'hidden', 'enabled', 'method', 'url', 'templates', 'arguments'];

    protected const NULLABLE_FIELDS = ['resulting_employer_state'];

    protected const CASTS = ['arguments' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyArguments::class], 'sub_actions' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyNegotiationSubActions::class], 'templates' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyTemplates::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyArguments> Обязательные и дополнительные аргументы для запроса */
    public array $arguments;

    /** @var bool Возможно ли совершить действие */
    public bool $enabled;

    /** @var bool Является ли данная коллекция скрытой */
    public bool $hidden;

    /** @var string Идентификатор действия */
    public string $id;

    /** @var string HTTP метод, который необходимо выполнить */
    public string $method;

    /** @var string Название действия */
    public string $name;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Документация [Работодательское состояние](#tag/Otklikipriglasheniya-rabotodatelya) по отклику/приглашению, которое будет установлено после совершения действия. Если действие не меняет состояние — `null` */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $resulting_employer_state = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyNegotiationSubActions>|null Действия для перевода отклика/приглашения в подстатус */
    public ?array $sub_actions = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyTemplates> Шаблоны писем */
    public array $templates;

    /** @var string URL, на который необходимо выполнить запрос */
    public string $url;
}
