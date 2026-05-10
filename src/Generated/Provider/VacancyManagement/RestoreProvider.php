<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\VacancyManagement;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\RestoreVacancyFromHiddenPrompt;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Restore\VacancyFromHiddenResponse;

/**
 * Группа методов "restore" раздела HeadHunter API "Управление вакансиями".
 */
class RestoreProvider extends BaseHhProvider
{
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
     * @return VacancyFromHiddenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyFromHidden(RestoreVacancyFromHiddenPrompt $prompt): VacancyFromHiddenResponse
    {
        /** @var VacancyFromHiddenResponse $response */
        $response = $this->request($prompt, VacancyFromHiddenResponse::class);

        return $response;
    }
}
