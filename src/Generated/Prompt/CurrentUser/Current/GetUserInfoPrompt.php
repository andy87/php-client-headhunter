<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\CurrentUser\Current;

use Andy87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt as BaseGetCurrentUserInfoPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /me.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-current-user-info
 *
 * @property string|null $HH_User_Agent User controlled HeadHunter user agent header.
 */
class GetUserInfoPrompt extends BaseGetCurrentUserInfoPrompt
{
}
