<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\SetWritePossibilityCommonPrompt;
use and_y87\ClientsHh\Generated\Response\Chats\Write\SetPossibilityCommonResponse;

/**
 * Группа методов "write" раздела HeadHunter API "Чаты".
 */
class WriteProvider extends BaseHhProvider
{
    /**
     * Запретить/разрешить переписку в чате соискателю
     *
     * OperationId: set-write-possibility-common.
     * HTTP: PUT /common/chats/{chat_id}/write_possibility.
     *
     * @param SetWritePossibilityCommonPrompt $prompt DTO запроса.
     *
     * @return SetPossibilityCommonResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setPossibilityCommon(SetWritePossibilityCommonPrompt $prompt): SetPossibilityCommonResponse
    {
        /** @var SetPossibilityCommonResponse $response */
        $response = $this->request($prompt, SetPossibilityCommonResponse::class);

        return $response;
    }
}
