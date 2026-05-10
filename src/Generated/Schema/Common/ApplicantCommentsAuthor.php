<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ApplicantCommentsAuthor.
 */
class ApplicantCommentsAuthor extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['full_name' => 'full_name'];

    protected const REQUIRED_FIELDS = ['full_name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string ФИО автора комментария */
    public string $full_name;
}
