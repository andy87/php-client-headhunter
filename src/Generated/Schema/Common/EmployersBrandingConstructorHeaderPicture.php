<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersBrandingConstructorHeaderPicture.
 */
class EmployersBrandingConstructorHeaderPicture extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['resized_path' => 'resized_path'];

    protected const REQUIRED_FIELDS = ['resized_path'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Путь к изображению на cdn хранилище */
    public string $resized_path;
}
