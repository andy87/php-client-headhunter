<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/professional_roles.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-professional-roles-suggests
 */
class GetProfessionalRolesSuggestsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoles::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItem> Информация о найденных профессиональных ролях */
    public array $items;
}
