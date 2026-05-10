<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy;

use Andy87\ClientsHh\Generated\Response\GetVacancyUpgradeListResponse as BaseGetVacancyUpgradeListResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/upgrades.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-upgrade-list
 *
 * @property string|null $error_reason Описание ошибки в случае невозможности смены тарифа
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem> $items Список улучшений для вакансий
 */
class GetUpgradeListResponse extends BaseGetVacancyUpgradeListResponse
{
}
