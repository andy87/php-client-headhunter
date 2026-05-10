<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVideoVacancyCoverPicture.
 */
class VacancyVideoVacancyCoverPicture extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['resized_height' => 'resized_height', 'resized_path' => 'resized_path', 'resized_width' => 'resized_width'];

    protected const REQUIRED_FIELDS = ['resized_path', 'resized_width', 'resized_height'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Высота изображения */
    public float $resized_height;

    /** @var string Ссылка на изображение */
    public string $resized_path;

    /** @var float Ширина изображения */
    public float $resized_width;
}
