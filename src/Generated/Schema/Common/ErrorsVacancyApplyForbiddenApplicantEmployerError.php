<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsVacancyApplyForbiddenApplicantEmployerError.
 */
class ErrorsVacancyApplyForbiddenApplicantEmployerError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Ошибки при отклике/приглашении на вакансию:
  * `resume_not_found` — резюме из отклика/приглашения скрыто, удалено или не найдено.
  * `already_applied` — в системе уже есть отклик/приглашение на указанную вакансию (связка `resume_id` + `vacancy_id`).
  * `application_denied` — общая ошибка запрета отклика в случае, когда дополнительная информация недоступна.
  * `limit_exceeded` — превышен лимит количества откликов/приглашений.
  * `message_cannot_be_empty` — сообщение в переписке не может быть пустым.
  * `disabled_by_employer` — возможность переписки по отклику отключена работодателем.
  * `resume_deleted` — резюме, с которым совершался отклик, удалено или скрыто.
  * `archived` — вакансия, на которую совершался отклик, заархивирована.
  * `chat_is_not_ready` — операция временно не доступна, ожидается создание чата
 */
    public string $value;
}
