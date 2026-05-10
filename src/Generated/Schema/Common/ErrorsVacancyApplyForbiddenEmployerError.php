<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsVacancyApplyForbiddenEmployerError.
 */
class ErrorsVacancyApplyForbiddenEmployerError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Ошибки при приглашении на вакансию:
  * `invalid_vacancy` — вакансия из приглашения была архивирована или скрыта.
  * `wrong_state` — действие по приглашению в данном статусе невозможно.
  * `empty_message` — передан пустой текст сообщения.
  * `too_long_message` — передан слишком длинный текст сообщения.
  * `inappropriate_language_message` — передан текст сообщения, которое содержит нецензурную лексику.
  * `resource_policy_violation_message` — передан текст сообщения, которое нарушает правила использования сервиса.
  * `address_not_found` — переданный адрес не существует, либо принадлежит другому работодателю.
  * `not_enough_purchased_services` — не хватает оплаченных услуг. Например, [доступа к базе резюме](https://hh.ru/price/dbaccess).
  * `in_a_row_limit` — превышено количество последовательных сообщений в переписке. Необходимо дождаться ответа собеседника на сообщение.
  * `overall_limit` — превышен лимит сообщений.
  * `no_invitation` — переписка недоступна, так как в отклике ещё не было приглашения.
  * `chat_archived` — чат заархивирован.
  * `topic_archived` — отклик/приглашение заархивировано
 */
    public string $value;
}
