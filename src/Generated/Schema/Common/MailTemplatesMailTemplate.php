<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MailTemplatesMailTemplate.
 */
class MailTemplatesMailTemplate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['editable' => 'editable', 'employer_state' => 'employer_state', 'id' => 'id', 'name' => 'name', 'template_modified' => 'template_modified', 'text' => 'text', 'type' => 'type', 'variables' => 'variables'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'text', 'variables', 'type', 'template_modified', 'editable'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['variables' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var bool Можно ли редактировать текст шаблона */
    public bool $editable;

    /** @var string|null Работодательский статус, соответствующий данному шаблону; может отсутствовать если шаблон не связан с каким-либо статусом */
    public ?string $employer_state = null;

    /** @var string Идентификатор шаблона */
    public string $id;

    /** @var string Имя шаблона */
    public string $name;

    /** @var bool Был ли изменен шаблон работодателем или же используется стандартный шаблон с текстом от Хэдхантер */
    public bool $template_modified;

    /** @var string Текст шаблона */
    public string $text;

    /** @var string Способ доставки сообщения сформированного из шаблона */
    public string $type;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName> Переменные доступные для вставки в шаблон */
    public array $variables;
}
