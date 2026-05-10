<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetRegisteredCompaniesSuggestsPrompt;
use and_y87\ClientsHh\Generated\Response\GetRegisteredCompaniesSuggestsResponse;

/**
 * Provider раздела HeadHunter API "Подсказки по компаниям".
 * @property-read CompanySuggestions\RegisteredProvider $registered
 *
 */
class CompanySuggestionsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'registered' => CompanySuggestions\RegisteredProvider::class,
    ];

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
     * @return GetRegisteredCompaniesSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getRegisteredCompaniesSuggests(GetRegisteredCompaniesSuggestsPrompt $prompt): GetRegisteredCompaniesSuggestsResponse
    {
        /** @var CompanySuggestions\RegisteredProvider $group */
        $group = $this->operationGroup('registered');

        return $group->getCompaniesSuggests($prompt);
    }
}
