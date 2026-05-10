<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeEmployerProfilePersonalManager.
 */
class MeEmployerProfilePersonalManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['email' => 'email', 'first_name' => 'first_name', 'id' => 'id', 'is_available' => 'is_available', 'last_name' => 'last_name', 'photo_urls' => 'photo_urls', 'unavailable' => 'unavailable'];

    protected const REQUIRED_FIELDS = ['id', 'first_name', 'last_name', 'email', 'is_available'];

    protected const NULLABLE_FIELDS = ['photo_urls', 'unavailable'];

    protected const CASTS = [];

    /** @var string Email персонального менеджера */
    public string $email;

    /** @var string Имя персонального менеджера */
    public string $first_name;

    /** @var string Идентификатор персонального менеджера */
    public string $id;

    /** @var bool Доступен ли менеджер в данный момент */
    public bool $is_available;

    /** @var string Фамилия персонального менеджера */
    public string $last_name;

    /** @var array<string, mixed>|null Объект с фотографиями менеджера */
    public ?array $photo_urls = null;

    /** @var array<string, mixed>|null Информация об отсутствии менеджера, либо `null`, если менеджер доступен */
    public ?array $unavailable = null;
}
