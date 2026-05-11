<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/prolongate.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-prolongation-vacancy-info
 */
class GetProlongationVacancyInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['actions' => 'actions', 'expires_at' => 'expires_at', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'expires_at', 'actions'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyProlongate::class;

    /** @var array<int, mixed> Список действий, которые можно предпринять для продления вакансии */
    public array $actions;

    /** @var string Дата окончания публикации вакансии */
    public string $expires_at;

    /** @var string Идентификатор вакансии */
    public string $id;
}
