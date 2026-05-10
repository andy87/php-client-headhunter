<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsSalaryProperties.
 */
class ResumeObjectsSalaryProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amount' => 'amount', 'currency' => 'currency'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['amount', 'currency'];

    protected const CASTS = [];

    /** @var float|null Сумма */
    public ?float $amount = null;

    /** @var string|null Идентификатор валюты. Возможные значения перечислены в массиве `currency` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $currency = null;
}
