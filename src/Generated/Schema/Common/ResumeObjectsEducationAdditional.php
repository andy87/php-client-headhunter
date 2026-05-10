<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsEducationAdditional.
 */
class ResumeObjectsEducationAdditional extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'organization' => 'organization', 'result' => 'result', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['name', 'year'];

    protected const NULLABLE_FIELDS = ['id', 'result'];

    protected const CASTS = [];

    /** @var string|null Идентификатор */
    public ?string $id = null;

    /** @var string Название курса / теста */
    public string $name;

    /** @var string|null Организация, проводившая курс / тест */
    public ?string $organization = null;

    /** @var string|null Специальность / специализация */
    public ?string $result = null;

    /** @var float Год окончания / сдачи */
    public float $year;
}
