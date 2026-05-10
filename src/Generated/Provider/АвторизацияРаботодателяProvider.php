<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\InvalidateTokenPrompt;
use Andy87\ClientsHh\Generated\Response\InvalidateTokenResponse;

/**
 * Provider раздела HeadHunter API "Авторизация работодателя".
 * @property-read АвторизацияРаботодателя\InvalidateProvider $invalidate
 *
 */
class АвторизацияРаботодателяProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'invalidate' => АвторизацияРаботодателя\InvalidateProvider::class,
    ];

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
     * @return InvalidateTokenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function invalidateToken(InvalidateTokenPrompt $prompt): InvalidateTokenResponse
    {
        /** @var АвторизацияРаботодателя\InvalidateProvider $group */
        $group = $this->operationGroup('invalidate');

        return $group->token($prompt);
    }
}
