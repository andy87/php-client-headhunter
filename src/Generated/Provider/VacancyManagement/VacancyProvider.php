<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\VacancyManagement;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\AddVacancyToArchivePrompt;
use Andy87\ClientsHh\Generated\Prompt\AddVacancyToHiddenPrompt;
use Andy87\ClientsHh\Generated\Prompt\EditVacancyPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyConditionsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyStatsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyUpgradeListPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyVisitorsPrompt;
use Andy87\ClientsHh\Generated\Prompt\VacancyProlongationPrompt;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\AddToArchiveResponse;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\AddToHiddenResponse;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\EditResponse;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\GetConditionsResponse;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\GetStatsResponse;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\GetUpgradeListResponse;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\GetVisitorsResponse;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy\ProlongationResponse;

/**
 * Группа методов "vacancy" раздела HeadHunter API "Управление вакансиями".
 */
class VacancyProvider extends BaseHhProvider
{
    /**
     * Архивация вакансии
     *
     * Переносит вакансию в архив
     *
     * OperationId: add-vacancy-to-archive.
     * HTTP: PUT /employers/{employer_id}/vacancies/archived/{vacancy_id}.
     *
     * @param AddVacancyToArchivePrompt $prompt DTO запроса.
     *
     * @return AddToArchiveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addToArchive(AddVacancyToArchivePrompt $prompt): AddToArchiveResponse
    {
        /** @var AddToArchiveResponse $response */
        $response = $this->request($prompt, AddToArchiveResponse::class);

        return $response;
    }

    /**
     * Удаление вакансий
     *
     * Удалить можно только вакансию из архива
     *
     * OperationId: add-vacancy-to-hidden.
     * HTTP: PUT /employers/{employer_id}/vacancies/hidden/{vacancy_id}.
     *
     * @param AddVacancyToHiddenPrompt $prompt DTO запроса.
     *
     * @return AddToHiddenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addToHidden(AddVacancyToHiddenPrompt $prompt): AddToHiddenResponse
    {
        /** @var AddToHiddenResponse $response */
        $response = $this->request($prompt, AddToHiddenResponse::class);

        return $response;
    }

    /**
     * Редактирование вакансий
     *
     * Изменяет поля вакансии, передаваемые в теле запроса.
     *
     * Составные поля (например, `salary_range`, `contacts`, `professional_roles`) можно редактировать только целиком, передавая полный объект. Например, для изменения валюты в зарплате, необходимо передавать также и значение зарплаты.
     *
     * Поля `billing_type` и `manager` необходимо передавать в отдельном запросе
     *
     * OperationId: edit-vacancy.
     * HTTP: PUT /vacancies/{vacancy_id}.
     *
     * @param EditVacancyPrompt $prompt DTO запроса.
     *
     * @return EditResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function edit(EditVacancyPrompt $prompt): EditResponse
    {
        /** @var EditResponse $response */
        $response = $this->request($prompt, EditResponse::class);

        return $response;
    }

    /**
     * Условия заполнения полей при добавлении и редактировании вакансий
     *
     * OperationId: get-vacancy-conditions.
     * HTTP: GET /vacancy_conditions.
     *
     * @param GetVacancyConditionsPrompt $prompt DTO запроса.
     *
     * @return GetConditionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getConditions(GetVacancyConditionsPrompt $prompt): GetConditionsResponse
    {
        /** @var GetConditionsResponse $response */
        $response = $this->request($prompt, GetConditionsResponse::class);

        return $response;
    }

    /**
     * Статистика по вакансии
     *
     * Возвращает статистику за последние пять дней существования вакансии.
     *
     * При этом:
     *
     * * Если вакансия создана менее пяти дней назад, то первой датой в ответе будет дата создания вакансии. Для будущих дат в полях `responses` и `views` вернется `null`.
     * * Если вакансия находится в архиве или удалена, то последней датой будет дата архивации
     *
     * OperationId: get-vacancy-stats.
     * HTTP: GET /vacancies/{vacancy_id}/stats.
     *
     * @param GetVacancyStatsPrompt $prompt DTO запроса.
     *
     * @return GetStatsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStats(GetVacancyStatsPrompt $prompt): GetStatsResponse
    {
        /** @var GetStatsResponse $response */
        $response = $this->request($prompt, GetStatsResponse::class);

        return $response;
    }

    /**
     * Список улучшений для вакансии
     *
     * OperationId: get-vacancy-upgrade-list.
     * HTTP: GET /vacancies/{vacancy_id}/upgrades.
     *
     * @param GetVacancyUpgradeListPrompt $prompt DTO запроса.
     *
     * @return GetUpgradeListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getUpgradeList(GetVacancyUpgradeListPrompt $prompt): GetUpgradeListResponse
    {
        /** @var GetUpgradeListResponse $response */
        $response = $this->request($prompt, GetUpgradeListResponse::class);

        return $response;
    }

    /**
     * Посмотревшие вакансию
     *
     * Возвращает список сокращенных резюме соискателей, просмотревших вакансию за последнюю неделю. Список отсортирован по убыванию по дате просмотра. Если у пользователя несколько резюме, то вернется резюме с наиболее поздней датой обновления.
     *
     * В списке `items` не отображаются резюме, которые соискатель удалил или скрыл от работодателя. Но они учитываются при пагинации (`per_page`) и при подсчете найденных резюме (`found`), а в поле `hidden_on_page` показано количество таких пропущенных резюме на странице
     *
     * OperationId: get-vacancy-visitors.
     * HTTP: GET /vacancies/{vacancy_id}/visitors.
     *
     * @param GetVacancyVisitorsPrompt $prompt DTO запроса.
     *
     * @return GetVisitorsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVisitors(GetVacancyVisitorsPrompt $prompt): GetVisitorsResponse
    {
        /** @var GetVisitorsResponse $response */
        $response = $this->request($prompt, GetVisitorsResponse::class);

        return $response;
    }

    /**
     * Продление вакансии
     *
     * Продлевает срок размещения указанной вакансии.
     *
     * Условия продления:
     *
     * * Стоимость продления вакансии равна стоимости новой публикации
     *
     * OperationId: vacancy-prolongation.
     * HTTP: POST /vacancies/{vacancy_id}/prolongate.
     *
     * @param VacancyProlongationPrompt $prompt DTO запроса.
     *
     * @return ProlongationResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function prolongation(VacancyProlongationPrompt $prompt): ProlongationResponse
    {
        /** @var ProlongationResponse $response */
        $response = $this->request($prompt, ProlongationResponse::class);

        return $response;
    }
}
