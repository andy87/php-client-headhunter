<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\CommonReferenceData;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetIndustriesPrompt;
use Andy87\ClientsHh\Generated\Response\CommonReferenceData\Industries\GetResponse;

/**
 * Группа методов "industries" раздела HeadHunter API "Общие справочники".
 */
class IndustriesProvider extends BaseHhProvider
{
    /**
     * Отрасли компаний
     *
     * Возвращает двухуровневый справочник всех отраслей
     *
     * OperationId: get-industries.
     * HTTP: GET /industries.
     *
     * @param GetIndustriesPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetIndustriesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
