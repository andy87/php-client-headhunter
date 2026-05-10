<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersEmployerManagerLimits.
 */
class EmployerManagersEmployerManagerLimits extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['left' => 'left', 'limits' => 'limits', 'spend' => 'spend'];

    protected const REQUIRED_FIELDS = ['limits', 'spend', 'left'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['left' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'limits' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'spend' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество оставшихся просмотров резюме. В этом параметре содержится лимит просмотров на компанию. Из-за этого он может быть меньше, чем доступно текущему пользователю */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $left;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Лимит на просмотр резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $limits;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество просмотренных резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $spend;
}
