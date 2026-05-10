<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftContactsWithFullPhone.
 */
class VacancyDraftContactsWithFullPhone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['email' => 'email', 'name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = ['phones', 'name'];

    protected const NULLABLE_FIELDS = ['email', 'name', 'phones'];

    protected const CASTS = ['phones' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPhoneItemWithFullPhone::class]];

    /** @var string|null Email */
    public ?string $email = null;

    /** @var string|null Имя менеджера */
    public ?string $name;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPhoneItemWithFullPhone>|null Список телефонов для связи */
    public ?array $phones;
}
