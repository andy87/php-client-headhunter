<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadAuthorizationPaymentMethodError.
 */
class ErrorsCommonBadAuthorizationPaymentMethodError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Описание ошибки.

Причина ошибки в том, что вы запрашиваете один из [платных методов](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access) без купленного доступа
 */
    public string $value;
}
