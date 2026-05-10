<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySalaryRangeSalaryRange.
 */
class VacancySalaryRangeSalaryRange extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['currency' => 'currency', 'frequency' => 'frequency', 'from' => 'from', 'gross' => 'gross', 'mode' => 'mode', 'to' => 'to'];

    protected const REQUIRED_FIELDS = ['currency', 'mode', 'gross'];

    protected const NULLABLE_FIELDS = ['frequency', 'from', 'to'];

    protected const CASTS = ['mode' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeMode::class];

    /** @var string Код валюты из [справочника currency](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public string $currency;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeFrequency|null Schema field frequency */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeFrequency $frequency = null;

    /** @var int|null Нижняя граница зарплаты */
    public ?int $from = null;

    /** @var bool Признак что границы зарплаты указаны до вычета налогов */
    public bool $gross;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeMode Schema field mode */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeMode $mode;

    /** @var int|null Верхняя граница зарплаты */
    public ?int $to = null;
}
