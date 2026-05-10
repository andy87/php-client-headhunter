<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Employer;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerInfoPrompt;
use and_y87\ClientsHh\Generated\Prompt\SearchEmployerPrompt;
use and_y87\ClientsHh\Generated\Response\Employer\Employer\GetInfoResponse;
use and_y87\ClientsHh\Generated\Response\Employer\Employer\SearchResponse;

/**
 * Группа методов "employer" раздела HeadHunter API "Работодатель".
 */
class EmployerProvider extends BaseHhProvider
{
    /**
     * Информация о работодателе
     *
     * Возвращает данные о работодателе со ссылкой на выдачу вакансий этого работодателя
     *
     * OperationId: get-employer-info.
     * HTTP: GET /employers/{employer_id}.
     *
     * @param GetEmployerInfoPrompt $prompt DTO запроса.
     *
     * @return GetInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getInfo(GetEmployerInfoPrompt $prompt): GetInfoResponse
    {
        /** @var GetInfoResponse $response */
        $response = $this->request($prompt, GetInfoResponse::class);

        return $response;
    }

    /**
     * Поиск работодателя
     *
     * При указании параметров пагинации (`page`, `per_page`) работает ограничение: глубина возвращаемых результатов не может быть больше `5000`. Например, возможен запрос `per_page=10&page=499` (выдача с `4991` по `5000` работодателя), но запрос с `per_page=10&page=500` вернёт ошибку (выдача с `5001` до `5010` работодателя)
     *
     * OperationId: search-employer.
     * HTTP: GET /employers.
     *
     * @param SearchEmployerPrompt $prompt DTO запроса.
     *
     * @return SearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function search(SearchEmployerPrompt $prompt): SearchResponse
    {
        /** @var SearchResponse $response */
        $response = $this->request($prompt, SearchResponse::class);

        return $response;
    }
}
