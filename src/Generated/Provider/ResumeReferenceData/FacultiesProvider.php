<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\ResumeReferenceData;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetFacultiesPrompt;
use and_y87\ClientsHh\Generated\Response\ResumeReferenceData\Faculties\GetResponse;

/**
 * Группа методов "faculties" раздела HeadHunter API "Справочники".
 */
class FacultiesProvider extends BaseHhProvider
{
    /**
     * Список факультетов учебного заведения
     *
     * Возвращает список факультетов указанного учебного заведения
     *
     * OperationId: get-faculties.
     * HTTP: GET /educational_institutions/{id}/faculties.
     *
     * @param GetFacultiesPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetFacultiesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
