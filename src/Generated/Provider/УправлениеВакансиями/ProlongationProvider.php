<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\УправлениеВакансиями;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetProlongationVacancyInfoPrompt;
use Andy87\ClientsHh\Generated\Response\УправлениеВакансиями\Prolongation\GetVacancyInfoResponse;

/**
 * Группа методов "prolongation" раздела HeadHunter API "Управление вакансиями".
 */
class ProlongationProvider extends BaseHhProvider
{
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
     * @return GetVacancyInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyInfo(GetProlongationVacancyInfoPrompt $prompt): GetVacancyInfoResponse
    {
        /** @var GetVacancyInfoResponse $response */
        $response = $this->request($prompt, GetVacancyInfoResponse::class);

        return $response;
    }
}
