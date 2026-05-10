<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\EmployerManagers\Employer;

use Andy87\ClientsHh\Generated\Response\GetEmployerManagerLimitsResponse as BaseGetEmployerManagerLimitsResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/limits/resume.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-manager-limits
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $left Количество оставшихся просмотров резюме. В этом параметре содержится лимит просмотров на компанию. Из-за этого он может быть меньше, чем доступно текущему пользователю
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $limits Лимит на просмотр резюме
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResumeView $spend Количество просмотренных резюме
 */
class GetManagerLimitsResponse extends BaseGetEmployerManagerLimitsResponse
{
}
