<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\TokenManagement;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\InvalidateTokenPrompt;
use and_y87\ClientsHh\Generated\Response\TokenManagement\Invalidate\TokenResponse;

/**
 * Группа методов "invalidate" раздела HeadHunter API "Авторизация работодателя".
 */
class InvalidateProvider extends BaseHhProvider
{
    /**
     * Инвалидация токена
     *
     * Инвалидация работает только на действующем access-токене.
     * После инвалидации токен нельзя будет запросить с помощью refresh-токена - для работы необходимо будет заново авторизоваться в API
     * Таким образом нельзя инвалидировать токен приложения <a name="invalidate_token"></a>.
     * В случае компрометации токена необходимо инвалидировать скомпрометированный токен и запросить токен заново!
     *
     * OperationId: invalidate-token.
     * HTTP: DELETE /token.
     *
     * @param InvalidateTokenPrompt $prompt DTO запроса.
     *
     * @return TokenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function token(InvalidateTokenPrompt $prompt): TokenResponse
    {
        /** @var TokenResponse $response */
        $response = $this->request($prompt, TokenResponse::class);

        return $response;
    }
}
