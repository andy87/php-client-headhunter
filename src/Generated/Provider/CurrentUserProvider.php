<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt;
use and_y87\ClientsHh\Generated\Response\GetCurrentUserInfoResponse;

/**
 * Provider раздела HeadHunter API "Информация о соискателе".
 * @property-read CurrentUser\CurrentProvider $current
 *
 */
class CurrentUserProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'current' => CurrentUser\CurrentProvider::class,
    ];

    /**
     * Информация о текущем пользователе
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
