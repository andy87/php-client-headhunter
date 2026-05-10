<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftDeprecatedType.
 */
class VacancyDraftDeprecatedType extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Тип из [справочника vacancy_type](#tag/Obshie-spravochniki/operation/get-dictionaries). Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING), если передать vacancy_properties, то значение данного поля будет проигнорировано. Если передать только значение closed_for_applicants без vacancy_properties, то closed_for_applicants будет проигнорировано */
    public ?string $id = null;
}
