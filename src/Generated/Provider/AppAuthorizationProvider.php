<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\AuthorizePrompt;
use Andy87\ClientsHh\Generated\Response\AuthorizeResponse;

/**
 * Provider раздела HeadHunter API "Авторизация приложения".
 * @property-read AppAuthorization\GeneralProvider $general
 *
 */
class AppAuthorizationProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'general' => AppAuthorization\GeneralProvider::class,
    ];

    /**
     * Получение access-токена
     *
     * OperationId: authorize.
     * HTTP: POST /token.
     *
     * @param AuthorizePrompt $prompt DTO запроса.
     *
     * @return AuthorizeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function authorize(AuthorizePrompt $prompt): AuthorizeResponse
    {
        /** @var AppAuthorization\GeneralProvider $group */
        $group = $this->operationGroup('general');

        return $group->authorize($prompt);
    }
}
