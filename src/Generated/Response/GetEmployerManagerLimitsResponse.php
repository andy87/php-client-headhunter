<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/limits/resume.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-manager-limits
 */
class GetEmployerManagerLimitsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['left' => 'left', 'limits' => 'limits', 'spend' => 'spend'];

    protected const REQUIRED_FIELDS = ['limits', 'spend', 'left'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['left' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'limits' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'spend' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersEmployerManagerLimits::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество оставшихся просмотров резюме. В этом параметре содержится лимит просмотров на компанию. Из-за этого он может быть меньше, чем доступно текущему пользователю */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $left;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Лимит на просмотр резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $limits;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество просмотренных резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $spend;
}
