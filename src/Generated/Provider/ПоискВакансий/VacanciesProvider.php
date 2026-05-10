<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ПоискВакансий;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacanciesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacanciesRelatedToVacancyPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacanciesSimilarToVacancyPrompt;
use Andy87\ClientsHh\Generated\Response\ПоискВакансий\Vacancies\GetRelatedToVacancyResponse;
use Andy87\ClientsHh\Generated\Response\ПоискВакансий\Vacancies\GetResponse;
use Andy87\ClientsHh\Generated\Response\ПоискВакансий\Vacancies\GetSimilarToVacancyResponse;

/**
 * Группа методов "vacancies" раздела HeadHunter API "Поиск вакансий".
 */
class VacanciesProvider extends BaseHhProvider
{
    /**
     * Поиск по вакансиям
     *
     * Возвращает список вакансий, размещенных в сервисе. Список вакансий фильтруется согласно переданным параметрам запроса.
     *
     * Особенности работы метода:
     *
     * * Неизвестные параметры и параметры с ошибкой в названии игнорируются.
     * * Если не передан токен авторизации, то после первого запроса будет предложено пройти капчу.
     * * Список вакансий зависит от типа авторизации пользователя.
     * * Список вакансий также зависит от [выбранного сайта](#section/Obshaya-informaciya/Vybor-sajta) (параметр `host`). Однако выбор регионального сайта, например hh.kz, не ограничивает список вакансиями данного региона. Чтобы ограничить список по региону, используйте параметр `area`.
     * * При указании параметров пагинации (`page`, `per_page`) работает ограничение: глубина возвращаемых результатов не может быть больше `2000`. Например, возможен запрос `per_page=10&page=199` (выдача с `1991` по `2000` вакансию), но запрос с `per_page=10&page=200` вернёт ошибку (выдача с `2001` по `2010` вакансию)
     *
     * OperationId: get-vacancies.
     * HTTP: GET /vacancies.
     *
     * @param GetVacanciesPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetVacanciesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }

    /**
     * Поиск подходящих вакансий
     *
     * По умолчанию, выдает вакансии, похожие на вакансию.
     *
     * Если запрос идет со страницы вакансии (параметр `hhtmSource` = `vacancy` или `vacancy_search_list` или `vacancy_search_filter`):
     *   * когда пользователь не авторизован — рекомендации для анонимов.
     *
     * При указании параметров пагинации (`page`, `per_page`) работает ограничение: глубина возвращаемых результатов не может быть больше `2000`. Например, возможен запрос `per_page=10&page=199` (выдача с `1991` по `2000` вакансию), но запрос с `per_page=10&page=200` вернёт ошибку (выдача с `2001` по `2010` вакансию)
     *
     * OperationId: get-vacancies-related-to-vacancy.
     * HTTP: GET /vacancies/{vacancy_id}/related_vacancies.
     *
     * @param GetVacanciesRelatedToVacancyPrompt $prompt DTO запроса.
     *
     * @return GetRelatedToVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getRelatedToVacancy(GetVacanciesRelatedToVacancyPrompt $prompt): GetRelatedToVacancyResponse
    {
        /** @var GetRelatedToVacancyResponse $response */
        $response = $this->request($prompt, GetRelatedToVacancyResponse::class);

        return $response;
    }

    /**
     * Поиск по вакансиям, похожим на вакансию
     *
     * Если не передан токен авторизации, то после первого запроса будет предложено пройти капчу.
     *
     * При указании параметров пагинации (`page`, `per_page`) работает ограничение: глубина возвращаемых результатов не может быть больше `2000`. Например, возможен запрос `per_page=10&page=199` (выдача с `1991` по `2000` вакансию), но запрос с `per_page=10&page=200` вернёт ошибку (выдача с `2001` по `2010` вакансию)
     *
     * OperationId: get-vacancies-similar-to-vacancy.
     * HTTP: GET /vacancies/{vacancy_id}/similar_vacancies.
     *
     * @param GetVacanciesSimilarToVacancyPrompt $prompt DTO запроса.
     *
     * @return GetSimilarToVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSimilarToVacancy(GetVacanciesSimilarToVacancyPrompt $prompt): GetSimilarToVacancyResponse
    {
        /** @var GetSimilarToVacancyResponse $response */
        $response = $this->request($prompt, GetSimilarToVacancyResponse::class);

        return $response;
    }
}
