<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\EmployerManagers;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\AddEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\DeleteEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\EditEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagerLimitsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagerPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagerTypesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerManagersPrompt;
use and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer\AddManagerResponse;
use and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer\DeleteManagerResponse;
use and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer\EditManagerResponse;
use and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer\GetManagerLimitsResponse;
use and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer\GetManagerResponse;
use and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer\GetManagerTypesResponse;
use and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer\GetManagersResponse;

/**
 * Группа методов "employer" раздела HeadHunter API "Менеджеры работодателя".
 */
class EmployerProvider extends BaseHhProvider
{
    /**
     * Добавление менеджера
     *
     * OperationId: add-employer-manager.
     * HTTP: POST /employers/{employer_id}/managers.
     *
     * @param AddEmployerManagerPrompt $prompt DTO запроса.
     *
     * @return AddManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addManager(AddEmployerManagerPrompt $prompt): AddManagerResponse
    {
        /** @var AddManagerResponse $response */
        $response = $this->request($prompt, AddManagerResponse::class);

        return $response;
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
     * @return DeleteManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteManager(DeleteEmployerManagerPrompt $prompt): DeleteManagerResponse
    {
        /** @var DeleteManagerResponse $response */
        $response = $this->request($prompt, DeleteManagerResponse::class);

        return $response;
    }

    /**
     * Редактирование менеджера
     *
     * OperationId: edit-employer-manager.
     * HTTP: PUT /employers/{employer_id}/managers/{manager_id}.
     *
     * @param EditEmployerManagerPrompt $prompt DTO запроса.
     *
     * @return EditManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function editManager(EditEmployerManagerPrompt $prompt): EditManagerResponse
    {
        /** @var EditManagerResponse $response */
        $response = $this->request($prompt, EditManagerResponse::class);

        return $response;
    }

    /**
     * Получение информации о менеджере
     *
     * OperationId: get-employer-manager.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}.
     *
     * @param GetEmployerManagerPrompt $prompt DTO запроса.
     *
     * @return GetManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getManager(GetEmployerManagerPrompt $prompt): GetManagerResponse
    {
        /** @var GetManagerResponse $response */
        $response = $this->request($prompt, GetManagerResponse::class);

        return $response;
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
     * @return GetManagerLimitsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getManagerLimits(GetEmployerManagerLimitsPrompt $prompt): GetManagerLimitsResponse
    {
        /** @var GetManagerLimitsResponse $response */
        $response = $this->request($prompt, GetManagerLimitsResponse::class);

        return $response;
    }

    /**
     * Список менеджеров работодателя
     *
     * OperationId: get-employer-managers.
     * HTTP: GET /employers/{employer_id}/managers.
     *
     * @param GetEmployerManagersPrompt $prompt DTO запроса.
     *
     * @return GetManagersResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getManagers(GetEmployerManagersPrompt $prompt): GetManagersResponse
    {
        /** @var GetManagersResponse $response */
        $response = $this->request($prompt, GetManagersResponse::class);

        return $response;
    }

    /**
     * Справочник типов и прав менеджера
     *
     * OperationId: get-employer-manager-types.
     * HTTP: GET /employers/{employer_id}/manager_types.
     *
     * @param GetEmployerManagerTypesPrompt $prompt DTO запроса.
     *
     * @return GetManagerTypesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getManagerTypes(GetEmployerManagerTypesPrompt $prompt): GetManagerTypesResponse
    {
        /** @var GetManagerTypesResponse $response */
        $response = $this->request($prompt, GetManagerTypesResponse::class);

        return $response;
    }
}
