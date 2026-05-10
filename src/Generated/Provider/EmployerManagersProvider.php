<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\AddEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\DeleteEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\EditEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagerLimitsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagerTypesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagersPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetManagerAccountsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetManagerSettingsPrompt;
use and_y87\ClientsHh\Generated\Response\AddEmployerManagerResponse;
use and_y87\ClientsHh\Generated\Response\DeleteEmployerManagerResponse;
use and_y87\ClientsHh\Generated\Response\EditEmployerManagerResponse;
use and_y87\ClientsHh\Generated\Response\GetEmployerManagerLimitsResponse;
use and_y87\ClientsHh\Generated\Response\GetEmployerManagerResponse;
use and_y87\ClientsHh\Generated\Response\GetEmployerManagerTypesResponse;
use and_y87\ClientsHh\Generated\Response\GetEmployerManagersResponse;
use and_y87\ClientsHh\Generated\Response\GetManagerAccountsResponse;
use and_y87\ClientsHh\Generated\Response\GetManagerSettingsResponse;

/**
 * Provider раздела HeadHunter API "Менеджеры работодателя".
 * @property-read EmployerManagers\EmployerProvider $employer
 * @property-read EmployerManagers\ManagerProvider $manager
 *
 */
class EmployerManagersProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'employer' => EmployerManagers\EmployerProvider::class,
        'manager' => EmployerManagers\ManagerProvider::class,
    ];

    /**
     * Добавление менеджера
     *
     * OperationId: add-employer-manager.
     * HTTP: POST /employers/{employer_id}/managers.
     *
     * @param AddEmployerManagerPrompt $prompt DTO запроса.
     *
     * @return AddEmployerManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addEmployerManager(AddEmployerManagerPrompt $prompt): AddEmployerManagerResponse
    {
        /** @var EmployerManagers\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->addManager($prompt);
    }

    /**
     * Удаление менеджера
     *
     * Удаление менеджера занимает некоторое время. По этой причине, если сразу после успешного удаления менеджера вы запросите, например, список менеджеров, в ответе может вернуться удаленный менеджер
     *
     * OperationId: delete-employer-manager.
     * HTTP: DELETE /employers/{employer_id}/managers/{manager_id}.
     *
     * @param DeleteEmployerManagerPrompt $prompt DTO запроса.
     *
     * @return DeleteEmployerManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteEmployerManager(DeleteEmployerManagerPrompt $prompt): DeleteEmployerManagerResponse
    {
        /** @var EmployerManagers\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->deleteManager($prompt);
    }

    /**
     * Редактирование менеджера
     *
     * OperationId: edit-employer-manager.
     * HTTP: PUT /employers/{employer_id}/managers/{manager_id}.
     *
     * @param EditEmployerManagerPrompt $prompt DTO запроса.
     *
     * @return EditEmployerManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function editEmployerManager(EditEmployerManagerPrompt $prompt): EditEmployerManagerResponse
    {
        /** @var EmployerManagers\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->editManager($prompt);
    }

    /**
     * Получение информации о менеджере
     *
     * OperationId: get-employer-manager.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}.
     *
     * @param GetEmployerManagerPrompt $prompt DTO запроса.
     *
     * @return GetEmployerManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerManager(GetEmployerManagerPrompt $prompt): GetEmployerManagerResponse
    {
        /** @var EmployerManagers\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getManager($prompt);
    }

    /**
     * Дневной лимит просмотра резюме для текущего менеджера
     *
     * Метод доступен менеджеру только для просмотра своего дневного лимита
     *
     * OperationId: get-employer-manager-limits.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}/limits/resume.
     *
     * @param GetEmployerManagerLimitsPrompt $prompt DTO запроса.
     *
     * @return GetEmployerManagerLimitsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerManagerLimits(GetEmployerManagerLimitsPrompt $prompt): GetEmployerManagerLimitsResponse
    {
        /** @var EmployerManagers\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getManagerLimits($prompt);
    }

    /**
     * Список менеджеров работодателя
     *
     * OperationId: get-employer-managers.
     * HTTP: GET /employers/{employer_id}/managers.
     *
     * @param GetEmployerManagersPrompt $prompt DTO запроса.
     *
     * @return GetEmployerManagersResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerManagers(GetEmployerManagersPrompt $prompt): GetEmployerManagersResponse
    {
        /** @var EmployerManagers\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getManagers($prompt);
    }

    /**
     * Справочник типов и прав менеджера
     *
     * OperationId: get-employer-manager-types.
     * HTTP: GET /employers/{employer_id}/manager_types.
     *
     * @param GetEmployerManagerTypesPrompt $prompt DTO запроса.
     *
     * @return GetEmployerManagerTypesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerManagerTypes(GetEmployerManagerTypesPrompt $prompt): GetEmployerManagerTypesResponse
    {
        /** @var EmployerManagers\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getManagerTypes($prompt);
    }

    /**
     * Рабочие аккаунты менеджера
     *
     * Возвращает список рабочих аккаунтов менеджера и информацию об основном и текущем аккаунте.
     *
     * Для работы под определенным аккаунтом необходимо передать значение account_id, полученное из списка, в заголовке:
     *
     * `X-Manager-Account-Id: {account_id}`
     *
     * Использовать данный заголовок можно во всех методах, доступных для работодателей.
     *
     * В заголовке можно передавать account_id основного аккаунта, который также подразумевается по умолчанию, при отсутствии заголовка
     *
     * OperationId: get-manager-accounts.
     * HTTP: GET /manager_accounts/mine.
     *
     * @param GetManagerAccountsPrompt $prompt DTO запроса.
     *
     * @return GetManagerAccountsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getManagerAccounts(GetManagerAccountsPrompt $prompt): GetManagerAccountsResponse
    {
        /** @var EmployerManagers\ManagerProvider $group */
        $group = $this->operationGroup('manager');

        return $group->getAccounts($prompt);
    }

    /**
     * Предпочтения менеджера
     *
     * Возвращает информацию о предпочтениях менеджера.
     *
     * Проще всего получить URL из поля `manager_settings_url` объекта `manager`
     * в [информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info).
     *
     * Предпочтения менеджера *не влияют* на действия в API по умолчанию. Например, брендированный шаблон оформления
     * (`default_vacancy_branded_template`) не будет применен автоматически при публикации вакансии, если шаблон не был передан.
     * Приложение может использовать эту информацию для того, чтобы реализовать логику предзаполнения полей
     *
     * OperationId: get-manager-settings.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}/settings.
     *
     * @param GetManagerSettingsPrompt $prompt DTO запроса.
     *
     * @return GetManagerSettingsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getManagerSettings(GetManagerSettingsPrompt $prompt): GetManagerSettingsResponse
    {
        /** @var EmployerManagers\ManagerProvider $group */
        $group = $this->operationGroup('manager');

        return $group->getSettings($prompt);
    }
}
