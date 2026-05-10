<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftTest.
 */
class VacancyDraftTest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'required' => 'required'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['id', 'required'];

    protected const CASTS = [];

    /** @var string|null Тест, который будет добавлен в вакансию */
    public ?string $id = null;

    /** @var bool|null Флаг обязательности прохождения теста при отклике на вакансию */
    public ?bool $required = null;
}
