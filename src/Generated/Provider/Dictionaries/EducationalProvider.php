<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Dictionaries;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetEducationalInstitutionsDictionaryPrompt;
use Andy87\ClientsHh\Generated\Response\Dictionaries\Educational\GetInstitutionsDictionaryResponse;

/**
 * Группа методов "educational" раздела HeadHunter API "Справочники".
 */
class EducationalProvider extends BaseHhProvider
{
    /**
     * Основная информация об учебных заведениях
     *
     * OperationId: get-educational-institutions-dictionary.
     * HTTP: GET /educational_institutions.
     *
     * @param GetEducationalInstitutionsDictionaryPrompt $prompt DTO запроса.
     *
     * @return GetInstitutionsDictionaryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getInstitutionsDictionary(GetEducationalInstitutionsDictionaryPrompt $prompt): GetInstitutionsDictionaryResponse
    {
        /** @var GetInstitutionsDictionaryResponse $response */
        $response = $this->request($prompt, GetInstitutionsDictionaryResponse::class);

        return $response;
    }
}
