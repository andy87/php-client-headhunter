<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersEmployerManagerLimits.
 */
class EmployerManagersEmployerManagerLimits extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['left' => 'left', 'limits' => 'limits', 'spend' => 'spend'];

    protected const REQUIRED_FIELDS = ['limits', 'spend', 'left'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['left' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'limits' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'spend' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество оставшихся просмотров резюме. В этом параметре содержится лимит просмотров на компанию. Из-за этого он может быть меньше, чем доступно текущему пользователю */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $left;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Лимит на просмотр резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $limits;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество просмотренных резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $spend;
}
