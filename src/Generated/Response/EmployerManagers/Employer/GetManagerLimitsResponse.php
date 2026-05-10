<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerManagers\Employer;

use and_y87\ClientsHh\Generated\Response\GetEmployerManagerLimitsResponse as BaseGetEmployerManagerLimitsResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/limits/resume.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-manager-limits
 *
 * @property \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $left Количество оставшихся просмотров резюме. В этом параметре содержится лимит просмотров на компанию. Из-за этого он может быть меньше, чем доступно текущему пользователю
 * @property \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $limits Лимит на просмотр резюме
 * @property \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $spend Количество просмотренных резюме
 */
class GetManagerLimitsResponse extends BaseGetEmployerManagerLimitsResponse
{
}
