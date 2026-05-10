<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsVacancyProlongateError.
 */
class ErrorsVacancyProlongateError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Тип ошибки */
    public string $type;

    /** @var string Причина ошибки:

* `not_enough_purchased_services` — купленных услуг недостаточно для продления данного типа вакансии.
* `quota_exceeded` — квота менеджера на публикацию данного типа вакансии закончилась.
* `prolongation_forbidden` — продление вакансий недоступно текущему менеджеру.
* `unavailable_for_archived` — продление недоступно для архивной вакансии.
* `too_early` — продление раньше времени.
* `not_premoderated` — продление недоступно для вакансии, которая не прошла процесс модерации
 */
    public string $value;
}
