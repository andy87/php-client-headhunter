<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Подсказки;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetEducationalInstitutionsSuggestsPrompt;
use Andy87\ClientsHh\Generated\Response\Подсказки\Educational\GetInstitutionsSuggestsResponse;

/**
 * Группа методов "educational" раздела HeadHunter API "Подсказки".
 */
class EducationalProvider extends BaseHhProvider
{
    /**
     * Подсказки по названиям учебных заведений
     *
     * Чтобы узнать список факультетов, обратитесь к [соответствующему методу](#tag/Spravochniki/operation/get-educational-institutions-dictionary)
     *
     * OperationId: get-educational-institutions-suggests.
     * HTTP: GET /suggests/educational_institutions.
     *
     * @param GetEducationalInstitutionsSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetInstitutionsSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getInstitutionsSuggests(GetEducationalInstitutionsSuggestsPrompt $prompt): GetInstitutionsSuggestsResponse
    {
        /** @var GetInstitutionsSuggestsResponse $response */
        $response = $this->request($prompt, GetInstitutionsSuggestsResponse::class);

        return $response;
    }
}
