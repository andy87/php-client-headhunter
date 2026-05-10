<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoles::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItem> Информация о найденных профессиональных ролях */
    public array $items;
}
