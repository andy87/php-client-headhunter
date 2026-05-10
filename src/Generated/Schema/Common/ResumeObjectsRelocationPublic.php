<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsRelocationPublic.
 */
class ResumeObjectsRelocationPublic extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'district' => 'district', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['area' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesArea::class], 'district' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'type' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea>|null Список городов, в которые возможен переезд. Имеет смысл только с соответствующим полем `type` */
    public ?array $area = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Список районов, в которые возможен переезд. Имеет смысл только с соответствующим полем `type` */
    public ?array $district = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Готовность к переезду. Элемент справочника [relocation_type](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $type;
}
