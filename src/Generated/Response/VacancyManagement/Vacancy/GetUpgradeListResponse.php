<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyManagement\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancyUpgradeListResponse as BaseGetVacancyUpgradeListResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/upgrades.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-upgrade-list
 *
 * @property string|null $error_reason Описание ошибки в случае невозможности смены тарифа
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem> $items Список улучшений для вакансий
 */
class GetUpgradeListResponse extends BaseGetVacancyUpgradeListResponse
{
}
