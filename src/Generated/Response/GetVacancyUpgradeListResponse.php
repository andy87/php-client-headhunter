<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListResponse::class;

    /** @var string|null Описание ошибки в случае невозможности смены тарифа */
    public ?string $error_reason = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem> Список улучшений для вакансий */
    public array $items;
}
