<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ОбщиеСправочники;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAreasFromSpecifiedPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetAreasPrompt;
use Andy87\ClientsHh\Generated\Response\ОбщиеСправочники\Areas\GetFromSpecifiedResponse;
use Andy87\ClientsHh\Generated\Response\ОбщиеСправочники\Areas\GetResponse;

/**
 * Группа методов "areas" раздела HeadHunter API "Общие справочники".
 */
class AreasProvider extends BaseHhProvider
{
    /**
     * Дерево всех регионов
     *
     * Возвращает древовидный список всех регионов.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-areas.
     * HTTP: GET /areas.
     *
     * @param GetAreasPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetAreasPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }

    /**
     * Справочник регионов, начиная с указанного
     *
     * Возвращает древовидный список регионов, начиная с указанного.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-areas-from-specified.
     * HTTP: GET /areas/{area_id}.
     *
     * @param GetAreasFromSpecifiedPrompt $prompt DTO запроса.
     *
     * @return GetFromSpecifiedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getFromSpecified(GetAreasFromSpecifiedPrompt $prompt): GetFromSpecifiedResponse
    {
        /** @var GetFromSpecifiedResponse $response */
        $response = $this->request($prompt, GetFromSpecifiedResponse::class);

        return $response;
    }
}
