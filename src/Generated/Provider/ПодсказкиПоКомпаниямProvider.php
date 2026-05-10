<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetRegisteredCompaniesSuggestsPrompt;
use Andy87\ClientsHh\Generated\Response\GetRegisteredCompaniesSuggestsResponse;

/**
 * Provider раздела HeadHunter API "Подсказки по компаниям".
 * @property-read ПодсказкиПоКомпаниям\RegisteredProvider $registered
 *
 */
class ПодсказкиПоКомпаниямProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'registered' => ПодсказкиПоКомпаниям\RegisteredProvider::class,
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
        /** @var ПодсказкиПоКомпаниям\RegisteredProvider $group */
        $group = $this->operationGroup('registered');

        return $group->getCompaniesSuggests($prompt);
    }
}
