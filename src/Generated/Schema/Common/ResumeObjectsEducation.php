<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsEducation.
 */
class ResumeObjectsEducation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional' => 'additional', 'attestation' => 'attestation', 'elementary' => 'elementary', 'level' => 'level', 'primary' => 'primary'];

    protected const REQUIRED_FIELDS = ['level'];

    protected const NULLABLE_FIELDS = ['additional', 'attestation', 'elementary', 'primary'];

    protected const CASTS = ['additional' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationAdditional::class], 'attestation' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationAdditional::class], 'elementary' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationElementary::class], 'level' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesEducationLevel::class, 'primary' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationPrimary::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationAdditional>|null Список куров повышения квалификации */
    public ?array $additional = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationAdditional>|null Список пройденных тестов или экзаменов */
    public ?array $attestation = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationElementary>|null Среднее образование. Обычно заполняется только при отсутствии высшего образования */
    public ?array $elementary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesEducationLevel Уровень образования. Возможные значения приведены в поле `education_level` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesEducationLevel $level;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducationPrimary>|null Список образований выше среднего */
    public ?array $primary = null;
}
