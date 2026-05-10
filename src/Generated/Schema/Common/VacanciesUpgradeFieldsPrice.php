<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesUpgradeFieldsPrice.
 */
class VacanciesUpgradeFieldsPrice extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amount' => 'amount', 'currency_code' => 'currency_code'];

    protected const REQUIRED_FIELDS = ['amount', 'currency_code'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Значение цены */
    public string $amount;

    /** @var string Идентификатор валюты. Возможные значения приведены в поле `currency` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public string $currency_code;
}
