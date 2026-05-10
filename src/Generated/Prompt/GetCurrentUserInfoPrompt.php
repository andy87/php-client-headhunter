<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /me.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-current-user-info
 */
class GetCurrentUserInfoPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/me';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null User controlled HeadHunter user agent header. */
    public ?string $HH_User_Agent = null;
}
