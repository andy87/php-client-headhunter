<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySalaryRangeSalaryRangeOutput.
 */
class VacancySalaryRangeSalaryRangeOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['currency' => 'currency', 'frequency' => 'frequency', 'from' => 'from', 'gross' => 'gross', 'mode' => 'mode', 'to' => 'to'];

    protected const REQUIRED_FIELDS = ['currency', 'mode', 'gross'];

    protected const NULLABLE_FIELDS = ['frequency', 'from', 'to'];

    protected const CASTS = ['mode' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeModeOutput::class];

    /** @var string Код валюты из [справочника currency](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public string $currency;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeFrequencyOutput|null Schema field frequency */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeFrequencyOutput $frequency = null;

    /** @var int|null Нижняя граница зарплаты */
    public ?int $from = null;

    /** @var bool Признак что границы зарплаты указаны до вычета налогов */
    public bool $gross;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeModeOutput Schema field mode */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeModeOutput $mode;

    /** @var int|null Верхняя граница зарплаты */
    public ?int $to = null;
}
