<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/settings.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-manager-settings
 */
class GetManagerSettingsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['default_currency' => 'default_currency', 'default_vacancy_branded_template' => 'default_vacancy_branded_template', 'use_sms_notification' => 'use_sms_notification'];

    protected const REQUIRED_FIELDS = ['default_currency', 'use_sms_notification'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['default_currency' => \and_y87\ClientsHh\Generated\Schema\Common\ManagerSettingsCurrency::class, 'default_vacancy_branded_template' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate::class];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ManagerSettings::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ManagerSettingsCurrency Response field default_currency */
    public \and_y87\ClientsHh\Generated\Schema\Common\ManagerSettingsCurrency $default_currency;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate|null Response field default_vacancy_branded_template */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate $default_vacancy_branded_template = null;

    /** @var bool Предпочтение по использованию флага `send_sms`
при [приглашении соискателя](#tag/Otklikipriglasheniya-rabotodatelya/operation/invite-applicant-to-vacancy)
 */
    public bool $use_sms_notification;
}
