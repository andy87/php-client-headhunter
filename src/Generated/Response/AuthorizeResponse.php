<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [POST] /token.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/authorize
 */
class AuthorizeResponse extends AbstractResponse
{
    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\AuthUserTokenAndAppToken::class;
}
