<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Подсказки\Professional;

use Andy87\ClientsHh\Generated\Response\GetProfessionalRolesSuggestsResponse as BaseGetProfessionalRolesSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/professional_roles.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-professional-roles-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItem> $items Информация о найденных профессиональных ролях
 */
class GetRolesSuggestsResponse extends BaseGetProfessionalRolesSuggestsResponse
{
}
