<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsPortfolioNoId.
 */
class ResumeObjectsPortfolioNoId extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'medium' => 'medium', 'small' => 'small'];

    protected const REQUIRED_FIELDS = ['small', 'medium'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Описание изображения в портфолио */
    public ?string $description = null;

    /** @var string URL среднего по размеру изображения. Изображение по данному url доступно ограниченное время, после получения ответа. Приложение должно быть готово к тому, что на запрос изображения вернётся `404 Not Found`
 */
    public string $medium;

    /** @var string URL уменьшенного изображения. Изображение по данному url доступно ограниченное время, после получения ответа. Приложение должно быть готово к тому, что на запрос изображения вернётся `404 Not Found`
 */
    public string $small;
}
