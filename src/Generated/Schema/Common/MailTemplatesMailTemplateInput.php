<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MailTemplatesMailTemplateInput.
 */
class MailTemplatesMailTemplateInput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['text' => 'text'];

    protected const REQUIRED_FIELDS = ['text'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текст шаблона */
    public string $text;
}
