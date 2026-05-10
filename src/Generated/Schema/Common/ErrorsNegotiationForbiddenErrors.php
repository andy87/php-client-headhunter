<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsNegotiationForbiddenErrors.
 */
class ErrorsNegotiationForbiddenErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'description' => 'description', 'errors' => 'errors', 'oauth_error' => 'oauth_error'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\and_y87\ClientsHh\Generated\Schema\Common\ErrorsNegotiationForbiddenError::class]];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var string|null Описание ошибки */
    public ?string $description = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ErrorsNegotiationForbiddenError> Массив с данными ошибок */
    public array $errors;

    /** @var string|null Ошибки авторизации:
  * `token-revoked` — Токен отозван пользователем или сервером, приложению необходимо [запросить новую авторизацию](#tag/Avtorizaciya-rabotodatelya/operation/authorize)
  * `token-expired` — Время жизни `access_token` завершилось, необходимо [получить `refresh_token`](#tag/Avtorizaciya-rabotodatelya/operation/authorize)
 */
    public ?string $oauth_error = null;
}
