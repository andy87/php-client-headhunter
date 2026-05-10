<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsEducationPrimary.
 */
class ResumeObjectsEducationPrimary extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['education_level' => 'education_level', 'id' => 'id', 'name' => 'name', 'name_id' => 'name_id', 'organization' => 'organization', 'organization_id' => 'organization_id', 'result' => 'result', 'result_id' => 'result_id', 'university_acronym' => 'university_acronym', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['name', 'year'];

    protected const NULLABLE_FIELDS = ['id', 'name_id', 'organization', 'organization_id', 'result', 'result_id', 'university_acronym'];

    protected const CASTS = ['education_level' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesEducationLevel::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesEducationLevel|null Уровень образования. Возможные значения приведены в поле `education_level` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesEducationLevel $education_level = null;

    /** @var string|null Идентификатор */
    public ?string $id = null;

    /** @var string Название учебного заведения */
    public string $name;

    /** @var string|null Идентификатор учебного заведения */
    public ?string $name_id = null;

    /** @var string|null Факультет */
    public ?string $organization = null;

    /** @var string|null Идентификатор факультета */
    public ?string $organization_id = null;

    /** @var string|null Специальность / специализация */
    public ?string $result = null;

    /** @var string|null Идентификатор специальности / специализации */
    public ?string $result_id = null;

    /** @var string|null Акроним учебного заведения */
    public ?string $university_acronym = null;

    /** @var float Год окончания */
    public float $year;
}
