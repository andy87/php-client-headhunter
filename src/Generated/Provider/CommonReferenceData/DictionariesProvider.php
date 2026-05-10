<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\CommonReferenceData;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetDictionariesPrompt;
use Andy87\ClientsHh\Generated\Response\CommonReferenceData\Dictionaries\GetResponse;

/**
 * Группа методов "dictionaries" раздела HeadHunter API "Общие справочники".
 */
class DictionariesProvider extends BaseHhProvider
{
    /**
     * Справочники полей
     *
     * Справочники полей и сущностей, используемых в API. Значения в справочниках могут поменяться в любой момент
     *
     * OperationId: get-dictionaries.
     * HTTP: GET /dictionaries.
     *
     * @param GetDictionariesPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetDictionariesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
