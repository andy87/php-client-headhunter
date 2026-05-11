<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/upgrades.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-upgrade-list
 */
class GetVacancyUpgradeListResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['error_reason' => 'error_reason', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = ['error_reason'];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListResponse::class;

    /** @var string|null Описание ошибки в случае невозможности смены тарифа */
    public ?string $error_reason = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem> Список улучшений для вакансий */
    public array $items;
}
