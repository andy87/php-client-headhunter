<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ПодсказкиПоКомпаниям;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetRegisteredCompaniesSuggestsPrompt;
use Andy87\ClientsHh\Generated\Response\ПодсказкиПоКомпаниям\Registered\GetCompaniesSuggestsResponse;

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
