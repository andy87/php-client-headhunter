<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetOrCreateChatWithoutVacancyCommonPrompt;
use and_y87\ClientsHh\Generated\Response\Chats\OrValue\GetCreateChatWithoutVacancyCommonResponse;

/**
 * Группа методов "orValue" раздела HeadHunter API "Чаты".
 */
class OrValueProvider extends BaseHhProvider
{
    /**
     * Создание чата без вакансии
     *
     * Создание или получение чата между соискателем и работодателем без вакансии, с привязкой к резюме
     *
     * OperationId: get-or-create-chat-without-vacancy-common.
     * HTTP: POST /common/chats/without_vacancy.
     *
     * @param GetOrCreateChatWithoutVacancyCommonPrompt $prompt DTO запроса.
     *
     * @return GetCreateChatWithoutVacancyCommonResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCreateChatWithoutVacancyCommon(GetOrCreateChatWithoutVacancyCommonPrompt $prompt): GetCreateChatWithoutVacancyCommonResponse
    {
        /** @var GetCreateChatWithoutVacancyCommonResponse $response */
        $response = $this->request($prompt, GetCreateChatWithoutVacancyCommonResponse::class);

        return $response;
    }
}
