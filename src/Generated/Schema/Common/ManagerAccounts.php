<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ManagerAccounts.
 */
class ManagerAccounts extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['current_account_id' => 'current_account_id', 'is_primary_account_blocked' => 'is_primary_account_blocked', 'items' => 'items', 'primary_account_id' => 'primary_account_id'];

    protected const REQUIRED_FIELDS = ['items', 'current_account_id', 'primary_account_id', 'is_primary_account_blocked'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\ManagerAccount::class]];

    /** @var string Идентификатор текущего рабочего аккаунта менеджера. Совпадает со значением переданного в заголовке `X-Manager-Account-Id`
 */
    public string $current_account_id;

    /** @var bool Заблокирован ли главный рабочий аккаунт менеджера */
    public bool $is_primary_account_blocked;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ManagerAccount> Список рабочих аккаунтов менеджера */
    public array $items;

    /** @var string Идентификатор главного рабочего аккаунта менеджера */
    public string $primary_account_id;
}
