<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\CommonDictionaries\Professional;

use Andy87\ClientsHh\Generated\Response\GetProfessionalRolesDictionaryResponse as BaseGetProfessionalRolesDictionaryResponse;

/**
 * Ответ HeadHunter API [GET] /professional_roles.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-professional-roles-dictionary
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCategory> $categories Информация о категории профессиональной роли
 */
class GetRolesDictionaryResponse extends BaseGetProfessionalRolesDictionaryResponse
{
}
