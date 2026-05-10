<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ProfessionalRolesRole.
 */
class ProfessionalRolesRole extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_incomplete_resumes' => 'accept_incomplete_resumes', 'id' => 'id', 'is_default' => 'is_default', 'name' => 'name', 'search_deprecated' => 'search_deprecated', 'search_deprecated_datetime' => 'search_deprecated_datetime', 'select_deprecated' => 'select_deprecated', 'select_deprecated_datetime' => 'select_deprecated_datetime'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'accept_incomplete_resumes', 'is_default'];

    protected const NULLABLE_FIELDS = ['search_deprecated_datetime', 'select_deprecated_datetime'];

    protected const CASTS = [];

    /** @var bool На роль принимаются отклики неполным резюме */
    public bool $accept_incomplete_resumes;

    /** @var string Идентификатор профессиональной роли */
    public string $id;

    /** @var bool Дефолтная роль */
    public bool $is_default;

    /** @var string Имя профессиональной роли */
    public string $name;

    /** @var bool|null Наличие запрета на использование в поиске при составлении поискового запроса */
    public ?bool $search_deprecated = null;

    /** @var string|null Время, с которого действует запрет на использование роли в поиске при составлении поискового запроса,
в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm`
 */
    public ?string $search_deprecated_datetime = null;

    /** @var bool|null Наличие запрета на использование при создании новых сущностей (резюме или вакансии) */
    public ?bool $select_deprecated = null;

    /** @var string|null Время, с которого действует запрет на использование роли при создании новых сущностей,
в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm`
 */
    public ?string $select_deprecated_datetime = null;
}
