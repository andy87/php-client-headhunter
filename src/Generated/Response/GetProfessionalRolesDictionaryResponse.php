<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /professional_roles.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-professional-roles-dictionary
 */
class GetProfessionalRolesDictionaryResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [\and_y87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCategory::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCatalog::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCategory> Информация о категории профессиональной роли */
    public array $categories;
}
