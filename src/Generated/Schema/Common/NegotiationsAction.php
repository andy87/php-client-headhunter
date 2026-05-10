<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsAction.
 */
class NegotiationsAction extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'disable_reason' => 'disable_reason', 'enabled' => 'enabled', 'id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'enabled'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Ссылка на сайт, переход по которой инициирует действие */
    public ?string $alternate_url = null;

    /** @var string|null Пояснение, почему действие недоступно */
    public ?string $disable_reason = null;

    /** @var bool Доступно ли действие */
    public bool $enabled;

    /** @var string Тип действия */
    public string $id;

    /** @var string Описание действия */
    public string $name;
}
