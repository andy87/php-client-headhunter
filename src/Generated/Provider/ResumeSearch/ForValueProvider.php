<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ResumeSearch;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\SearchForResumesPrompt;
use Andy87\ClientsHh\Generated\Response\ResumeSearch\ForValue\SearchResumesResponse;

/**
 * Группа методов "forValue" раздела HeadHunter API "Поиск резюме".
 */
class ForValueProvider extends BaseHhProvider
{
    /**
     * Поиск резюме
     *
     * Возвращает результаты поиска резюме.
     *
     * Некоторые параметры запроса могут принимать множественные значения: `key=value&key=value`. Если параметр может принимать несколько значений, об этом явно указано в его описании. Неизвестные параметры и параметры с ошибкой в названии игнорируются.
     *
     * При указании параметров пагинации (`page`, `per_page`) работает ограничение: глубина возвращаемых результатов не может быть больше 2000. Например, возможен запрос `per_page=10&page=199` (выдача с 1991 по 2000 резюме), но запрос с `per_page=10&page=200` вернёт ошибку (выдача с 2001 до 2010 резюме).
     *
     * Возвращаемые результаты группируются по соискателю: один и тот же соискатель не может вернуться в выборке несколько раз. Если у соискателя есть несколько резюме, которые подходят под запрос, то только одно из его резюме вернется в качестве элемента в массиве items
     *
     * OperationId: search-for-resumes.
     * HTTP: GET /resumes.
     *
     * @param SearchForResumesPrompt $prompt DTO запроса.
     *
     * @return SearchResumesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function searchResumes(SearchForResumesPrompt $prompt): SearchResumesResponse
    {
        /** @var SearchResumesResponse $response */
        $response = $this->request($prompt, SearchResumesResponse::class);

        return $response;
    }
}
