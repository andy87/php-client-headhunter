<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Справочники\Educational;

use Andy87\ClientsHh\Generated\Response\GetEducationalInstitutionsDictionaryResponse as BaseGetEducationalInstitutionsDictionaryResponse;

/**
 * Ответ HeadHunter API [GET] /educational_institutions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-educational-institutions-dictionary
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesEducationalInstitutionItem> $items Информация о найденных учебных заведениях
 */
class GetInstitutionsDictionaryResponse extends BaseGetEducationalInstitutionsDictionaryResponse
{
}
