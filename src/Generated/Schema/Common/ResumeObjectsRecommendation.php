<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsRecommendation.
 */
class ResumeObjectsRecommendation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['contact' => 'contact', 'name' => 'name', 'organization' => 'organization', 'position' => 'position'];

    protected const REQUIRED_FIELDS = ['name', 'position', 'organization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Контакт */
    public ?string $contact = null;

    /** @var string Имя выдавшего рекомендацию */
    public string $name;

    /** @var string Организация */
    public string $organization;

    /** @var string Должность */
    public string $position;
}
