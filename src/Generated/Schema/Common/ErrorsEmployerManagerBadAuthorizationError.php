<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsEmployerManagerBadAuthorizationError.
 */
class ErrorsEmployerManagerBadAuthorizationError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['allowed_accounts' => 'allowed_accounts', 'reason' => 'reason', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['allowed_accounts' => [\Andy87\ClientsHh\Generated\Schema\Common\ManagerAccount::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ManagerAccount>|null Список доступных для токена аккаунтов менеджера в случае, если используемый рабочий аккаунт заблокирован.
Актуально только в случае авторизации работодателя
 */
    public ?array $allowed_accounts = null;

    /** @var string|null Ошибки при создании или редактировании менеджера работодателя:
  * `already_exist` — Менеджер с такой почтой уже существует
  * `creation_limit_exceeded` — Достигнут лимит на создание менеджеров
  * `not_editable` — Поле *field_name* недоступно для редактирования
 */
    public ?string $reason = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Общие ошибки:
  * `bad_authorization` — Токен авторизации не существует или не валидный
  * `token_expired` — Время жизни access_token завершилось, необходимо [выполнить обновление access_token](#section/Avtorizaciya/Obnovlenie-pary-access-i-refresh-tokenov)
  * `token_revoked` — Токен отозван пользователем или сервером, приложению необходимо [запросить новую авторизацию](#section/Avtorizaciya)
  * `application_not_found` — Ваше приложение было удалено
  * `used_manager_account_forbidden` — [Рабочий аккаунт](#tag/Menedzhery-rabotodatelya/operation/get-manager-accounts) заблокирован
  * `manager_extra_account_not_found` — В заголовке передан некорректный id аккаунта
  * `email` — Менеджер с такой почтой уже существует
  * `user_auth_expected` — Ожидается авторизация пользователя, передана авторизация приложения
  * `manager_type` — Поле manager_type недоступно для редактирования
  * `area` — Поле area недоступно для редактирования
  * `last_name` — Поле lastName недоступно для редактирования
  * `first_name` — Поле firstName недоступно для редактирования
  * `middle_name` — Поле middleName недоступно для редактирования
 */
    public ?string $value = null;
}
