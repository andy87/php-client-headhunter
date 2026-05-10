<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsDriverLicenseTypes.
 */
class ResumeObjectsDriverLicenseTypes extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Категория водительских прав соискателя. Элемент справочника [тип водительских прав](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public string $id;
}
