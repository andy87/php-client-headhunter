<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/vacancy_branded_templates.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-branded-templates-list
 */
class GetVacancyBrandedTemplatesListResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\EmployersVacancyBrandedTemplatesList::class;

    /** @var array<int, array<string, mixed>> Список доступных брендированных шаблонов вакансий */
    public array $items;
}
