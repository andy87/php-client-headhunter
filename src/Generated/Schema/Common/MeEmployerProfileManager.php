<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeEmployerProfileManager.
 */
class MeEmployerProfileManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['has_admin_rights' => 'has_admin_rights', 'has_multiple_manager_accounts' => 'has_multiple_manager_accounts', 'id' => 'id', 'is_main_contact_person' => 'is_main_contact_person', 'manager_settings_url' => 'manager_settings_url'];

    protected const REQUIRED_FIELDS = ['id', 'has_admin_rights', 'has_multiple_manager_accounts', 'is_main_contact_person', 'manager_settings_url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool Обладает ли текущий менеджер правами администратора */
    public bool $has_admin_rights;

    /** @var bool Существует ли у пользователя несколько [рабочих аккаунтов](#tag/Menedzhery-rabotodatelya/operation/get-manager-accounts) */
    public bool $has_multiple_manager_accounts;

    /** @var string Идентификатор менеджера */
    public string $id;

    /** @var bool Является ли текущий менеджер главным контактным лицом компании */
    public bool $is_main_contact_person;

    /** @var string URL, на который нужно сделать GET запрос, чтобы получить [предпочтения менеджера](#tag/Menedzhery-rabotodatelya/operation/get-manager-settings) */
    public string $manager_settings_url;
}
