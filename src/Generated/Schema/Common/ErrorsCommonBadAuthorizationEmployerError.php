<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadAuthorizationEmployerError.
 */
class ErrorsCommonBadAuthorizationEmployerError extends AbstractSchemaModel
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

    /** @var string|null Общие ошибки:
  * `bad_authorization` — Токен авторизации не существует или не валидный
  * `token_expired` — Время жизни access_token завершилось, необходимо [выполнить обновление access_token](#refresh_token)
  * `token_revoked` — Токен отозван пользователем или сервером, приложению необходимо [запросить новую авторизацию](#section/Tipy-avtorizacij)
  * `application_not_found` — Ваше приложение было удалено
  * `used_manager_account_forbidden` — [Рабочий аккаунт](#tag/Menedzhery-rabotodatelya/operation/get-manager-accounts) заблокирован
  * `manager_extra_account_not_found` — В заголовке передан некорректный id аккаунта
  * `user_auth_expected` — Передана авторизация приложения, метод требует [авторизации пользователя](#get-auth)
  * `application_auth_expected` — Передана авторизация пользователя, метод требует [авторизации приложения](#get-client-auth)
  * `employer_on_additional_check_restricted` — Работодатель находится на доп.проверке
 */
    public ?string $value = null;
}
