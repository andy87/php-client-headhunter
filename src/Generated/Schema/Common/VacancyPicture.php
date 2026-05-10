<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyPicture.
 */
class VacancyPicture extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['blurred_path' => 'blurred_path', 'height' => 'height', 'path' => 'path', 'width' => 'width'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['blurred_path'];

    protected const CASTS = [];

    /** @var string|null Путь до маленькой (порядка 4% от изначального размера) размытой картинки. При показе ее нужно преобразовать к нужному размеру */
    public ?string $blurred_path = null;

    /** @var float|null Высота картинки */
    public ?float $height = null;

    /** @var string|null Адрес картинки */
    public ?string $path = null;

    /** @var float|null Ширина картинки */
    public ?float $width = null;
}
