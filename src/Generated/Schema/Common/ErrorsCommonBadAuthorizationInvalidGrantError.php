<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadAuthorizationInvalidGrantError.
 */
class ErrorsCommonBadAuthorizationInvalidGrantError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error', 'error_description' => 'error_description'];

    protected const REQUIRED_FIELDS = ['error', 'error_description'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор типа ошибки, используются значения, описанные в [документе RFC 6749](https://datatracker.ietf.org/doc/html/rfc6749#section-5.2)
 */
    public string $error;

    /** @var string Дополнительное описание ошибки
* `token has already been refreshed` Ошибка возникает при попытке воспользоваться refresh-токеном второй раз
* `token not expired` Ошибка возникает при попытке обновить действующий access-токен. access-токен можно обновлять только после того, как он истек
* `token was revoked` Токен был отозван. Например, токен отзывается, если время действия пароля истекло
* `bad token ` Передано неправильное значение токена
* `code has already been used` `authorization_code` уже был использован (его можно использовать только один раз)
* `code expired` `authorization_code` истек
* `code was revoke` `authorization_code` был отозван (это происходит, если время действия пароля истекло)
* `token deactivated ` Токен был деактивирован. Токен деактивируется после того, как пользователь сменил пароль
* `code verifier mismatch` Переданный `code_verifier` не соответствует `code_challenge`, указанному при запросе авторизации (PKCE)
 */
    public string $error_description;
}
