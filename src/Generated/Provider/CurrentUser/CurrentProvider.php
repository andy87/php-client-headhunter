<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\CurrentUser;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt;
use Andy87\ClientsHh\Generated\Response\CurrentUser\Current\GetUserInfoResponse;

/**
 * Группа методов "current" раздела HeadHunter API "Current user".
 */
class CurrentProvider extends BaseHhProvider
{
    /**
     * Get current user information.
     *
     * OperationId: get-current-user-info.
     * HTTP: GET /me.
     *
     * @param GetCurrentUserInfoPrompt $prompt DTO запроса.
     *
     * @return GetUserInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getUserInfo(GetCurrentUserInfoPrompt $prompt): GetUserInfoResponse
    {
        /** @var GetUserInfoResponse $response */
        $response = $this->request($prompt, GetUserInfoResponse::class);

        return $response;
    }
}
