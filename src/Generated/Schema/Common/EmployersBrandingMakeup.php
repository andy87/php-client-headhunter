<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersBrandingMakeup.
 */
class EmployersBrandingMakeup extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['makeup' => 'makeup', 'template_code' => 'template_code', 'template_version_id' => 'template_version_id'];

    protected const REQUIRED_FIELDS = ['type', 'template_code', 'template_version_id', 'makeup'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field makeup */
    public array $makeup;

    /** @var string Уникальный код активного бренд шаблона страницы в формате "makeup:\d+" */
    public string $template_code;

    /** @var string Идентификатор активной версии бренд шаблона страницы */
    public string $template_version_id;
}
