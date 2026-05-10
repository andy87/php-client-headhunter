<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyContacts.
 */
class VacancyContacts extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['email' => 'email', 'name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = ['name'];

    protected const NULLABLE_FIELDS = ['email', 'phones'];

    protected const CASTS = ['phones' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyPhoneItem::class]];

    /** @var string|null Электронная почта. Значение поля должно соответствовать формату email */
    public ?string $email = null;

    /** @var string Имя контакта */
    public string $name;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyPhoneItem>|null Список телефонов для связи */
    public ?array $phones = null;
}
