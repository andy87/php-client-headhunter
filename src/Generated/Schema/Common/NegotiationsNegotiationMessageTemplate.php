<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationMessageTemplate.
 */
class NegotiationsNegotiationMessageTemplate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employer_state' => 'employer_state', 'template_modified' => 'template_modified', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['text', 'template_modified'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Работодательский статус, соответствующий данному шаблону; может отсутствовать если шаблон не связан с каким-либо статусом */
    public ?string $employer_state = null;

    /** @var bool Был ли изменен шаблон работодателем или же используется стандартный шаблон с текстом от Хэдхантер */
    public bool $template_modified;

    /** @var string Текст шаблона */
    public string $text;
}
