<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacancyDraftTypeBillingType.
 */
class VacancyDraftVacancyDraftTypeBillingType extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['billing_type' => 'billing_type', 'type' => 'type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDeprecatedBillingType|null Заменён на параметр [vacancy_properties](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list), если передать vacancy_properties, то значение данного поля будет проигнорировано */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDeprecatedBillingType $billing_type = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDeprecatedType|null Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDeprecatedType $type = null;
}
