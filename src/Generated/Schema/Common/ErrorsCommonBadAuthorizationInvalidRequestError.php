<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadAuthorizationInvalidRequestError.
 */
class ErrorsCommonBadAuthorizationInvalidRequestError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error', 'error_description' => 'error_description'];

    protected const REQUIRED_FIELDS = ['error', 'error_description'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор типа ошибки, используются значения, описанные в [документе RFC 6749](https://datatracker.ietf.org/doc/html/rfc6749#section-5.2)
 */
    public string $error;

    /** @var string Дополнительное описание ошибки
* `account not found` Ошибка может возникнуть, если передана неправильная пара `client_id` и `client_secret`
* `account is locked` Пользовательский аккаунт заблокирован. Пользователь должен обратиться в службу поддержки сайта (письмо на api@hh.ru)
* `password invalidated` Пароль от пользовательского аккаунта устарел. Пользователь должен восстановить пароль на сайте `https://hh.ru`
* `login not verified` Пользовательский аккаунт не подтвержден. Пользователь должен обратиться в службу поддержки сайта
* `bad redirect url` передан неправильный `redirect_url`
* `token is empty` Не передан `refresh_token`
* `token not found` передан не правильный `refresh_token`
* `code not found ` переданный `authorization_code` не найден
 */
    public string $error_description;
}
