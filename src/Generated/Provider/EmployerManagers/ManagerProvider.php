<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\EmployerManagers;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetManagerAccountsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetManagerSettingsPrompt;
use Andy87\ClientsHh\Generated\Response\EmployerManagers\Manager\GetAccountsResponse;
use Andy87\ClientsHh\Generated\Response\EmployerManagers\Manager\GetSettingsResponse;

/**
 * Группа методов "manager" раздела HeadHunter API "Менеджеры работодателя".
 */
class ManagerProvider extends BaseHhProvider
{
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
     * @return GetAccountsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAccounts(GetManagerAccountsPrompt $prompt): GetAccountsResponse
    {
        /** @var GetAccountsResponse $response */
        $response = $this->request($prompt, GetAccountsResponse::class);

        return $response;
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
     * @return GetSettingsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSettings(GetManagerSettingsPrompt $prompt): GetSettingsResponse
    {
        /** @var GetSettingsResponse $response */
        $response = $this->request($prompt, GetSettingsResponse::class);

        return $response;
    }
}
