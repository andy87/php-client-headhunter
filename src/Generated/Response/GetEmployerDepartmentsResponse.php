<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/departments.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-departments
 */
class GetEmployerDepartmentsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployerDepartmentsResponse::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName> Список департаментов работодателя */
    public array $items;
}
