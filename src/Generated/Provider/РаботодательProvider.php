<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetEmployerInfoPrompt;
use Andy87\ClientsHh\Generated\Prompt\SearchEmployerPrompt;
use Andy87\ClientsHh\Generated\Response\GetEmployerInfoResponse;
use Andy87\ClientsHh\Generated\Response\SearchEmployerResponse;

/**
 * Provider раздела HeadHunter API "Работодатель".
 * @property-read Работодатель\EmployerProvider $employer
 *
 */
class РаботодательProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'employer' => Работодатель\EmployerProvider::class,
    ];

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
     * @return GetEmployerInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerInfo(GetEmployerInfoPrompt $prompt): GetEmployerInfoResponse
    {
        /** @var Работодатель\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getInfo($prompt);
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
     * @return SearchEmployerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function searchEmployer(SearchEmployerPrompt $prompt): SearchEmployerResponse
    {
        /** @var Работодатель\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->search($prompt);
    }
}
