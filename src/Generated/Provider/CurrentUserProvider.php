<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt;
use Andy87\ClientsHh\Generated\Response\GetCurrentUserInfoResponse;

/**
 * Provider раздела HeadHunter API "Current user".
 * @property-read CurrentUser\CurrentProvider $current
 *
 */
class CurrentUserProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'current' => CurrentUser\CurrentProvider::class,
    ];

    /**
     * Get current user information.
     *
     * OperationId: get-current-user-info.
     * HTTP: GET /me.
     *
     * @param GetCurrentUserInfoPrompt $prompt DTO запроса.
     *
     * @return GetCurrentUserInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCurrentUserInfo(GetCurrentUserInfoPrompt $prompt): GetCurrentUserInfoResponse
    {
        /** @var CurrentUser\CurrentProvider $group */
        $group = $this->operationGroup('current');

        return $group->getUserInfo($prompt);
    }
}
