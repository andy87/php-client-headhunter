<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyManagement\Prolongation;

use and_y87\ClientsHh\Generated\Response\GetProlongationVacancyInfoResponse as BaseGetProlongationVacancyInfoResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/prolongate.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-prolongation-vacancy-info
 *
 * @property array<int, mixed> $actions Список действий, которые можно предпринять для продления вакансии
 * @property string $expires_at Дата окончания публикации вакансии
 * @property string $id Идентификатор вакансии
 */
class GetVacancyInfoResponse extends BaseGetProlongationVacancyInfoResponse
{
}
