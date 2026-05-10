<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerManagers\Manager;

use and_y87\ClientsHh\Generated\Response\GetManagerSettingsResponse as BaseGetManagerSettingsResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/settings.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-manager-settings
 *
 * @property \and_y87\ClientsHh\Generated\Schema\Common\ManagerSettingsCurrency $default_currency Response field default_currency
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate|null $default_vacancy_branded_template Response field default_vacancy_branded_template
 * @property bool $use_sms_notification Предпочтение по использованию флага `send_sms` при [приглашении соискателя](#tag/Otklikipriglasheniya-rabotodatelya/operation/invite-applicant-to-vacancy)
 */
class GetSettingsResponse extends BaseGetManagerSettingsResponse
{
}
