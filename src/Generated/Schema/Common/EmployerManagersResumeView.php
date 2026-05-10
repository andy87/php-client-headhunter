<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersResumeView.
 */
class EmployerManagersResumeView extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['resume_view' => 'resume_view', 'resume_view_from_api' => 'resume_view_from_api'];

    protected const REQUIRED_FIELDS = ['resume_view'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Просмотры резюме через сайт */
    public int $resume_view;

    /** @var int|null Просмотры резюме из API. Возвращаются, если они предусмотрены в текущей конфигурации доступа к резюме для работодателя */
    public ?int $resume_view_from_api = null;
}
