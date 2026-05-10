<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySalary.
 */
class VacancySalary extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['currency' => 'currency', 'from' => 'from', 'gross' => 'gross', 'to' => 'to'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['currency', 'from', 'gross', 'to'];

    protected const CASTS = [];

    /** @var string|null Код валюты из [справочника currency](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $currency = null;

    /** @var int|null Нижняя граница зарплаты */
    public ?int $from = null;

    /** @var bool|null Признак что границы зарплаты указаны до вычета налогов */
    public ?bool $gross = null;

    /** @var int|null Верхняя граница зарплаты */
    public ?int $to = null;
}
