<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /salary_statistics/dictionaries/professional_areas.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-salary-professional-areas
 */
class GetSalaryProfessionalAreasResponse extends AbstractResponse
{
    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\DictionariesSalaryStatisticsProfessionalAreasResponse::class;
}
