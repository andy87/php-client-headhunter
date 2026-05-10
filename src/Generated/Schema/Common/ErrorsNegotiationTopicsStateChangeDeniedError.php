<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsNegotiationTopicsStateChangeDeniedError.
 */
class ErrorsNegotiationTopicsStateChangeDeniedError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Ошибки при переводе откликов по вакансии:
  * `application_denied` — ошибка доступа к отклику. Может возникнуть в случае перевода нескольких откликов в другой статус, если,
как минимум один из откликов принадлежит другой вакансии
 */
    public string $value;
}
