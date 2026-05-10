<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\AddVacancyToArchivePrompt;
use Andy87\ClientsHh\Generated\Prompt\AddVacancyToHiddenPrompt;
use Andy87\ClientsHh\Generated\Prompt\EditVacancyPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetActiveVacancyListPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetArchivedVacanciesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetHiddenVacanciesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetProlongationVacancyInfoPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyConditionsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyStatsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyUpgradeListPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyVisitorsPrompt;
use Andy87\ClientsHh\Generated\Prompt\PublishVacancyPrompt;
use Andy87\ClientsHh\Generated\Prompt\RestoreVacancyFromHiddenPrompt;
use Andy87\ClientsHh\Generated\Prompt\VacancyProlongationPrompt;
use Andy87\ClientsHh\Generated\Response\AddVacancyToArchiveResponse;
use Andy87\ClientsHh\Generated\Response\AddVacancyToHiddenResponse;
use Andy87\ClientsHh\Generated\Response\EditVacancyResponse;
use Andy87\ClientsHh\Generated\Response\GetActiveVacancyListResponse;
use Andy87\ClientsHh\Generated\Response\GetArchivedVacanciesResponse;
use Andy87\ClientsHh\Generated\Response\GetHiddenVacanciesResponse;
use Andy87\ClientsHh\Generated\Response\GetProlongationVacancyInfoResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyConditionsResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyStatsResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyUpgradeListResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyVisitorsResponse;
use Andy87\ClientsHh\Generated\Response\PublishVacancyResponse;
use Andy87\ClientsHh\Generated\Response\RestoreVacancyFromHiddenResponse;
use Andy87\ClientsHh\Generated\Response\VacancyProlongationResponse;

/**
 * Provider раздела HeadHunter API "Управление вакансиями".
 * @property-read УправлениеВакансиями\ActiveProvider $active
 * @property-read УправлениеВакансиями\ArchivedProvider $archived
 * @property-read УправлениеВакансиями\HiddenProvider $hidden
 * @property-read УправлениеВакансиями\ProlongationProvider $prolongation
 * @property-read УправлениеВакансиями\PublishProvider $publish
 * @property-read УправлениеВакансиями\RestoreProvider $restore
 * @property-read УправлениеВакансиями\VacancyProvider $vacancy
 *
 */
class УправлениеВакансиямиProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'active' => УправлениеВакансиями\ActiveProvider::class,
        'archived' => УправлениеВакансиями\ArchivedProvider::class,
        'hidden' => УправлениеВакансиями\HiddenProvider::class,
        'prolongation' => УправлениеВакансиями\ProlongationProvider::class,
        'publish' => УправлениеВакансиями\PublishProvider::class,
        'restore' => УправлениеВакансиями\RestoreProvider::class,
        'vacancy' => УправлениеВакансиями\VacancyProvider::class,
    ];

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
     * @return AddVacancyToArchiveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addVacancyToArchive(AddVacancyToArchivePrompt $prompt): AddVacancyToArchiveResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->addToArchive($prompt);
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
     * @return AddVacancyToHiddenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addVacancyToHidden(AddVacancyToHiddenPrompt $prompt): AddVacancyToHiddenResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->addToHidden($prompt);
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
     * @return EditVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function editVacancy(EditVacancyPrompt $prompt): EditVacancyResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->edit($prompt);
    }

    /**
     * Просмотр списка опубликованных вакансий
     *
     * Возвращает список опубликованных вакансий.
     *
     * Если передан параметр `resume_id`, то в список попадут только те вакансии, которые подходят для указанного резюме. Кроме того, ответ будет содержать дополнительные поля
     *
     * OperationId: get-active-vacancy-list.
     * HTTP: GET /employers/{employer_id}/vacancies/active.
     *
     * @param GetActiveVacancyListPrompt $prompt DTO запроса.
     *
     * @return GetActiveVacancyListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getActiveVacancyList(GetActiveVacancyListPrompt $prompt): GetActiveVacancyListResponse
    {
        /** @var УправлениеВакансиями\ActiveProvider $group */
        $group = $this->operationGroup('active');

        return $group->getVacancyList($prompt);
    }

    /**
     * Список архивных вакансий
     *
     * OperationId: get-archived-vacancies.
     * HTTP: GET /employers/{employer_id}/vacancies/archived.
     *
     * @param GetArchivedVacanciesPrompt $prompt DTO запроса.
     *
     * @return GetArchivedVacanciesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getArchivedVacancies(GetArchivedVacanciesPrompt $prompt): GetArchivedVacanciesResponse
    {
        /** @var УправлениеВакансиями\ArchivedProvider $group */
        $group = $this->operationGroup('archived');

        return $group->getVacancies($prompt);
    }

    /**
     * Список удаленных вакансий
     *
     * OperationId: get-hidden-vacancies.
     * HTTP: GET /employers/{employer_id}/vacancies/hidden.
     *
     * @param GetHiddenVacanciesPrompt $prompt DTO запроса.
     *
     * @return GetHiddenVacanciesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getHiddenVacancies(GetHiddenVacanciesPrompt $prompt): GetHiddenVacanciesResponse
    {
        /** @var УправлениеВакансиями\HiddenProvider $group */
        $group = $this->operationGroup('hidden');

        return $group->getVacancies($prompt);
    }

    /**
     * Информация о возможности продления вакансии
     *
     * Условия продления:
     *
     *     * Стоимость продления вакансии равна стоимости новой публикации
     *
     * OperationId: get-prolongation-vacancy-info.
     * HTTP: GET /vacancies/{vacancy_id}/prolongate.
     *
     * @param GetProlongationVacancyInfoPrompt $prompt DTO запроса.
     *
     * @return GetProlongationVacancyInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getProlongationVacancyInfo(GetProlongationVacancyInfoPrompt $prompt): GetProlongationVacancyInfoResponse
    {
        /** @var УправлениеВакансиями\ProlongationProvider $group */
        $group = $this->operationGroup('prolongation');

        return $group->getVacancyInfo($prompt);
    }

    /**
     * Условия заполнения полей при добавлении и редактировании вакансий
     *
     * OperationId: get-vacancy-conditions.
     * HTTP: GET /vacancy_conditions.
     *
     * @param GetVacancyConditionsPrompt $prompt DTO запроса.
     *
     * @return GetVacancyConditionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyConditions(GetVacancyConditionsPrompt $prompt): GetVacancyConditionsResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getConditions($prompt);
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
     * @return GetVacancyStatsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyStats(GetVacancyStatsPrompt $prompt): GetVacancyStatsResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getStats($prompt);
    }

    /**
     * Список улучшений для вакансии
     *
     * OperationId: get-vacancy-upgrade-list.
     * HTTP: GET /vacancies/{vacancy_id}/upgrades.
     *
     * @param GetVacancyUpgradeListPrompt $prompt DTO запроса.
     *
     * @return GetVacancyUpgradeListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyUpgradeList(GetVacancyUpgradeListPrompt $prompt): GetVacancyUpgradeListResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getUpgradeList($prompt);
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
     * @return GetVacancyVisitorsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyVisitors(GetVacancyVisitorsPrompt $prompt): GetVacancyVisitorsResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getVisitors($prompt);
    }

    /**
     * Публикация вакансии
     *
     * Создает новую вакансию с полями, передаваемыми в теле запроса.
     *
     * В соответствии с [законом РФ № 1032-1 от 19.04.1991 в ред. от 02.07.2013 г.](https://hh.ru/article/13967) запрещено размещать информацию, ограничивающую права или устанавливающую преимущества для соискателей по полу, возрасту, семейному положению и другим обстоятельствам, не связанным с деловыми качествами работников.
     *
     * Примечания:
     *
     * * При успешной публикации будут списаны соответствующие услуги.
     * * Все вакансии проходят ручную модерацию.
     * * В течение нескольких минут после публикации вакансия станет доступна в поиске.
     *
     * Полезные ссылки:
     *
     * * [Правила размещения вакансий](https://hh.ru/article/341)
     * * [Как составить хорошее описание вакансии](https://hh.ru/article/24517)
     *
     * OperationId: publish-vacancy.
     * HTTP: POST /vacancies.
     *
     * @param PublishVacancyPrompt $prompt DTO запроса.
     *
     * @return PublishVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function publishVacancy(PublishVacancyPrompt $prompt): PublishVacancyResponse
    {
        /** @var УправлениеВакансиями\PublishProvider $group */
        $group = $this->operationGroup('publish');

        return $group->vacancy($prompt);
    }

    /**
     * Восстановление вакансии из удаленных
     *
     * Восстановить можно только удаленную из архива вакансию. Вакансия вернется в архив
     *
     * OperationId: restore-vacancy-from-hidden.
     * HTTP: DELETE /employers/{employer_id}/vacancies/hidden/{vacancy_id}.
     *
     * @param RestoreVacancyFromHiddenPrompt $prompt DTO запроса.
     *
     * @return RestoreVacancyFromHiddenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function restoreVacancyFromHidden(RestoreVacancyFromHiddenPrompt $prompt): RestoreVacancyFromHiddenResponse
    {
        /** @var УправлениеВакансиями\RestoreProvider $group */
        $group = $this->operationGroup('restore');

        return $group->vacancyFromHidden($prompt);
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
     * @return VacancyProlongationResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyProlongation(VacancyProlongationPrompt $prompt): VacancyProlongationResponse
    {
        /** @var УправлениеВакансиями\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->prolongation($prompt);
    }
}
