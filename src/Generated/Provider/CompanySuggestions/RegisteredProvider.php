<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\CompanySuggestions;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetRegisteredCompaniesSuggestsPrompt;
use and_y87\ClientsHh\Generated\Response\CompanySuggestions\Registered\GetCompaniesSuggestsResponse;

/**
 * Группа методов "registered" раздела HeadHunter API "Подсказки по компаниям".
 */
class RegisteredProvider extends BaseHhProvider
{
    /**
     * Подсказки по зарегистрированным организациям
     *
     * Данные из этой подсказки можно использовать, например, для выбора компании при заполнении опыта работы в резюме. Чтобы найти организации, которые могут публиковать вакансии, используйте [поиск](#tag/Rabotodatel/operation/search-employer)
     *
     * OperationId: get-registered-companies-suggests.
     * HTTP: GET /suggests/companies.
     *
     * @param GetRegisteredCompaniesSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetCompaniesSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCompaniesSuggests(GetRegisteredCompaniesSuggestsPrompt $prompt): GetCompaniesSuggestsResponse
    {
        /** @var GetCompaniesSuggestsResponse $response */
        $response = $this->request($prompt, GetCompaniesSuggestsResponse::class);

        return $response;
    }
}
