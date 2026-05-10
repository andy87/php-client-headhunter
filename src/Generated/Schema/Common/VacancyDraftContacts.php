<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftContacts.
 */
class VacancyDraftContacts extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['email' => 'email', 'name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['email', 'name', 'phones'];

    protected const CASTS = ['phones' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPhoneItem::class]];

    /** @var string|null Email */
    public ?string $email = null;

    /** @var string|null Имя менеджера */
    public ?string $name = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPhoneItem>|null Список телефонов для связи */
    public ?array $phones = null;
}
