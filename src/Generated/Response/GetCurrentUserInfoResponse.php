<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /me.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-current-user-info
 */
class GetCurrentUserInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['id' => 'id', 'email' => 'email'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = ['email'];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\CurrentUserResponse::class;

    /** @var string User ID. */
    public string $id;

    /** @var string|null User email. */
    public ?string $email = null;
}
