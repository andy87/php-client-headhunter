<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadAuthorizationError.
 */
class ErrorsCommonBadAuthorizationError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Общие ошибки:
  * `bad_authorization` — Токен авторизации не существует или не валидный
  * `token_expired` — Время жизни access_token завершилось, необходимо [выполнить обновление access_token](#section/Avtorizaciya/Obnovlenie-pary-access-i-refresh-tokenov)
  * `token_revoked` — Токен отозван пользователем или сервером, приложению необходимо [запросить новую авторизацию](#section/Tipy-avtorizacij)
  * `application_not_found` — Ваше приложение было удалено
  * `user_auth_expected` — Передана авторизация приложения, метод требует [авторизации пользователя](#section/Avtorizaciya/Avtorizaciya-polzovatelya)
  * `application_auth_expected` — Передана авторизация пользователя, метод требует [авторизации приложения](#tag/Avtorizaciya-prilozheniya)
  * `no_scope` - В токене отсутствует необходимый скоуп
  * `used_manager_account_forbidden` — [Рабочий аккаунт](#tag/Menedzhery-rabotodatelya/operation/get-manager-accounts) заблокирован
  * `manager_extra_account_not_found` — В заголовке передан некорректный id аккаунта
 */
    public ?string $value = null;
}
