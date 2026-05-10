<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersInsiderInterviews.
 */
class EmployersInsiderInterviews extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'title' => 'title', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['url', 'id', 'title'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор интервью */
    public string $id;

    /** @var string Заголовок интервью */
    public string $title;

    /** @var string Адрес страницы, содержащей интервью */
    public string $url;
}
