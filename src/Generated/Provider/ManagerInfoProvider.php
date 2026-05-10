<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetAvailableVacancyTypesPrompt;
use and_y87\ClientsHh\Generated\Response\GetAvailableVacancyTypesResponse;

/**
 * Provider раздела HeadHunter API "Информация о менеджере".
 * @property-read ManagerInfo\AvailableProvider $available
 *
 */
class ManagerInfoProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'available' => ManagerInfo\AvailableProvider::class,
    ];

    /**
     * Варианты публикации вакансий у текущего менеджера
     *
     * Нужно использовать [новый метод](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list). Метод позволяет понять, может ли менеджер публиковать вакансии и какие типы вакансий ему доступны. Возвращает все возможные типы публикации
     *
     * OperationId: get-available-vacancy-types.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}/vacancies/available_types.
     *
     * @param GetAvailableVacancyTypesPrompt $prompt DTO запроса.
     *
     * @return GetAvailableVacancyTypesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAvailableVacancyTypes(GetAvailableVacancyTypesPrompt $prompt): GetAvailableVacancyTypesResponse
    {
        /** @var ManagerInfo\AvailableProvider $group */
        $group = $this->operationGroup('available');

        return $group->getVacancyTypes($prompt);
    }
}
