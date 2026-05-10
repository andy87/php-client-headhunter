<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsPhotoNoId.
 */
class ResumeObjectsPhotoNoId extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['n40' => '40', 'n100' => '100', 'n500' => '500', 'medium' => 'medium', 'small' => 'small'];

    protected const REQUIRED_FIELDS = ['small', 'medium'];

    protected const NULLABLE_FIELDS = ['n40', 'n100', 'n500'];

    protected const CASTS = [];

    /** @var string|null URL изображения размером 40x40 пикселей. Изображение по данному URL доступно ограниченное время после получения ответа. Приложение должно быть готово к тому, что на запрос изображения вернется ошибка `404 Not Found` */
    public ?string $n40 = null;

    /** @var string|null URL изображения размером 100x100 пикселей. Изображение по данному URL доступно ограниченное время после получения ответа. Приложение должно быть готово к тому, что на запрос изображения вернется ошибка `404 Not Found` */
    public ?string $n100 = null;

    /** @var string|null URL изображения размером 500x500 пикселей. Изображение по данному URL доступно ограниченное время после получения ответа. Приложение должно быть готово к тому, что на запрос изображения вернется ошибка `404 Not Found` */
    public ?string $n500 = null;

    /** @var string URL среднего по размеру изображения. Изображение по данному URL доступно ограниченное время после получения ответа. Приложение должно быть готово к тому, что на запрос изображения вернется ошибка `404 Not Found` */
    public string $medium;

    /** @var string URL уменьшенного изображения. Изображение по данному URL доступно ограниченное время после получения ответа. Приложение должно быть готово к тому, что на запрос изображения вернется ошибка `404 Not Found` */
    public string $small;
}
