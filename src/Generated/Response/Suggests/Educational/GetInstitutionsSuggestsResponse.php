<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Suggests\Educational;

use Andy87\ClientsHh\Generated\Response\GetEducationalInstitutionsSuggestsResponse as BaseGetEducationalInstitutionsSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/educational_institutions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-educational-institutions-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesEducationalInstitutionItem> $items Информация о найденных учебных заведениях
 */
class GetInstitutionsSuggestsResponse extends BaseGetEducationalInstitutionsSuggestsResponse
{
}
