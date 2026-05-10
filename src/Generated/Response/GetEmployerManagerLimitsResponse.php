<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['left' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'limits' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class, 'spend' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView::class];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersEmployerManagerLimits::class;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество оставшихся просмотров резюме. В этом параметре содержится лимит просмотров на компанию. Из-за этого он может быть меньше, чем доступно текущему пользователю */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $left;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Лимит на просмотр резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $limits;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView Количество просмотренных резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $spend;
}
