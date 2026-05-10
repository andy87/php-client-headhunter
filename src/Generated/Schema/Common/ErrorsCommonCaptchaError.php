<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonCaptchaError.
 */
class ErrorsCommonCaptchaError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['captcha_url' => 'captcha_url', 'fallback_url' => 'fallback_url', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Адрес веб-страницы, на которой можно пройти капчу.
После прохождения капчи аналогичный запрос в API должен выполниться успешно.
Приложение должно добавить в captcha_url обязательный параметр backurl,на который произойдет редирект
 после прохождения капчи.
Backurl должен обязательно содержать схему, например, https:// или схему приложения
 */
    public ?string $captcha_url = null;

    /** @var string|null Адрес веб-страницы, на котором можно капчу. Аналогично параметру captcha_url */
    public ?string $fallback_url = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Необходимо пройти капчу - `captcha_required`
 */
    public string $value;
}
