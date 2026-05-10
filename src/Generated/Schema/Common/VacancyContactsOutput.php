<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyContactsOutput.
 */
class VacancyContactsOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['call_tracking_enabled' => 'call_tracking_enabled', 'email' => 'email', 'name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['call_tracking_enabled', 'email', 'name', 'phones'];

    protected const CASTS = ['phones' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyPhoneItem::class]];

    /** @var bool|null Флаг подключения виртуального номера */
    public ?bool $call_tracking_enabled = null;

    /** @var string|null Электронная почта. Значение поля должно соответствовать формату email */
    public ?string $email = null;

    /** @var string|null Имя контакта */
    public ?string $name = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyPhoneItem>|null Список телефонов для связи */
    public ?array $phones = null;
}
