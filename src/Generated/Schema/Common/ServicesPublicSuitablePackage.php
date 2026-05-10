<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ServicesPublicSuitablePackage.
 */
class ServicesPublicSuitablePackage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['count' => 'count', 'invalid' => 'invalid', 'price_regions' => 'price_regions'];

    protected const REQUIRED_FIELDS = ['invalid', 'count', 'price_regions'];

    protected const NULLABLE_FIELDS = ['price_regions'];

    protected const CASTS = [];

    /** @var float Количество доступных публикаций */
    public float $count;

    /** @var bool Возможность публикации данного пакета с регионом и проф. ролью, переданными в query-параметрах */
    public bool $invalid;

    /** @var array<int, array<string, mixed>>|null Для каких регионов доступен пакет */
    public ?array $price_regions;
}
