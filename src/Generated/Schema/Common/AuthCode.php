<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter AuthCode.
 */
class AuthCode extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['client_id' => 'client_id', 'client_secret' => 'client_secret', 'code' => 'code', 'code_verifier' => 'code_verifier', 'grant_type' => 'grant_type', 'redirect_uri' => 'redirect_uri'];

    protected const REQUIRED_FIELDS = ['grant_type', 'client_id', 'client_secret', 'redirect_uri', 'code'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор, полученный при [создании приложения](https://dev.hh.ru/admin) */
    public string $client_id;

    /** @var string Защищенный ключ, полученный при [создании приложения](https://dev.hh.ru/admin) */
    public string $client_secret;

    /** @var string Значение `authorization_code`, полученное при [перенаправлении пользователя](#get-authorization_code)
 */
    public string $code;

    /** @var string|null Верификатор для [PKCE (Proof Key for Code Exchange, RFC 7636)](https://datatracker.ietf.org/doc/html/rfc7636).
Обязателен, если при запросе авторизации были переданы `code_challenge` и `code_challenge_method`.
Сервер вычислит `BASE64URL-ENCODE(SHA256(ASCII(code_verifier)))` от переданного значения и сверит с ранее полученным `code_challenge`
 */
    public ?string $code_verifier = null;

    /** @var string Способ запроса токена */
    public string $grant_type;

    /** @var string Uri для перенаправления пользователя после авторизации. Если не указать, используется из настроек приложения. При наличии происходит валидация значения. Вероятнее всего, потребуется сделать urlencode значения параметра
 */
    public string $redirect_uri;
}
