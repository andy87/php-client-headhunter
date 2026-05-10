<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetPayableApiActionsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetPayableApiMethodAccessPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetVacancyAvailableServicesListPrompt;
use and_y87\ClientsHh\Generated\Response\GetPayableApiActionsResponse;
use and_y87\ClientsHh\Generated\Response\GetPayableApiMethodAccessResponse;
use and_y87\ClientsHh\Generated\Response\GetVacancyAvailableServicesListResponse;

/**
 * Provider раздела HeadHunter API "Услуги работодателя".
 * @property-read EmployerServices\PayableProvider $payable
 * @property-read EmployerServices\VacancyProvider $vacancy
 *
 */
class EmployerServicesProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'payable' => EmployerServices\PayableProvider::class,
        'vacancy' => EmployerServices\VacancyProvider::class,
    ];

    /**
     * Информация по активным услугам API для платных методов
     *
     * Каждая подключенная услуга отображается отдельным объектом в массиве `items`, даже при условии, что подключено несколько услуг одного типа.
     * Если у работодателя нет активных услуг, то в ответе придет пустой массив `items`
     *
     * OperationId: get-payable-api-actions.
     * HTTP: GET /employers/{employer_id}/services/payable_api_actions/active.
     *
     * @param GetPayableApiActionsPrompt $prompt DTO запроса.
     *
     * @return GetPayableApiActionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPayableApiActions(GetPayableApiActionsPrompt $prompt): GetPayableApiActionsResponse
    {
        /** @var EmployerServices\PayableProvider $group */
        $group = $this->operationGroup('payable');

        return $group->getApiActions($prompt);
    }

    /**
     * Проверка доступа к платным методам
     *
     * Метод возвращает информацию о доступе к группам платных методов. Существующие группы:
     *
     * 1. Наличие доступа к методам резюме:
     *   * [Просмотр резюме](#tag/Prosmotr-rezyume/operation/get-resume).
     *   * [Работа с откликами](#tag/Otklikipriglasheniya-rabotodatelya).
     *   * [Переписка с соискателем](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-messages).
     * 2. Наличие доступа к методам поиска вакансий:
     *   * [Поиск резюме](#tag/Poisk-rezyume/operation/search-for-resumes).
     *   * [Сохраненные поиски резюме](#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-searches).
     * 3. Наличие доступа к [просмотру резюме](#tag/Prosmotr-rezyume/operation/get-resume), у которого есть отклик или приглашение.
     * 4. Наличие доступа к [просмотру резюме](#tag/Prosmotr-rezyume/operation/get-resume), найденных через [поиск по базе](#tag/Poisk-rezyume/operation/search-for-resumes).
     *
     * **Внимание!** Изменился доступ к контактной информации резюме, подробнее [о новой модели работы с базой резюме](#tag/Prosmotr-rezyume/Prosmotr-rezyume-s-kontaktami)
     *
     * OperationId: get-payable-api-method-access.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}/method_access.
     *
     * @param GetPayableApiMethodAccessPrompt $prompt DTO запроса.
     *
     * @return GetPayableApiMethodAccessResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPayableApiMethodAccess(GetPayableApiMethodAccessPrompt $prompt): GetPayableApiMethodAccessResponse
    {
        /** @var EmployerServices\PayableProvider $group */
        $group = $this->operationGroup('payable');

        return $group->getApiMethodAccess($prompt);
    }

    /**
     * Получение списка доступных вариантов публикации вакансии
     *
     * Данный метод используется для получения списка доступных вариантов публикации и отправки этих значений в апи публикации вакансии/создание черновика
     *
     * OperationId: get-vacancy-available-services-list.
     * HTTP: GET /employers/{employer_id}/services/available_publications.
     *
     * @param GetVacancyAvailableServicesListPrompt $prompt DTO запроса.
     *
     * @return GetVacancyAvailableServicesListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyAvailableServicesList(GetVacancyAvailableServicesListPrompt $prompt): GetVacancyAvailableServicesListResponse
    {
        /** @var EmployerServices\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getAvailableServicesList($prompt);
    }
}
