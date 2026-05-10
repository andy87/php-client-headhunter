<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsSavedSearchForbiddenError.
 */
class ErrorsSavedSearchForbiddenError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['allowed_accounts' => 'allowed_accounts', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['allowed_accounts' => [\and_y87\ClientsHh\Generated\Schema\Common\ManagerAccount::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ManagerAccount>|null Список доступных для токена аккаунтов менеджера в случае, если используемый рабочий аккаунт заблокирован.
Актуально только в случае авторизации работодателя
 */
    public ?array $allowed_accounts = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Возможные ошибки:
* `cant_send_to_yourself` — Нельзя передать сохраненный поиск самому себе
* `user_auth_expected` — Передана авторизация приложения, метод требует [авторизации пользователя](#section/Avtorizaciya/Avtorizaciya-polzovatelya)
 */
    public ?string $value = null;
}
