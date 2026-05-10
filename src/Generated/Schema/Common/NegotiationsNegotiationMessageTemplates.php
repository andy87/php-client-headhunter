<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationMessageTemplates.
 */
class NegotiationsNegotiationMessageTemplates extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['mail' => 'mail', 'sms' => 'sms'];

    protected const REQUIRED_FIELDS = ['mail'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['mail' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class, 'sms' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate Список шаблонов сообщений */
    public \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $mail;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate|null Список шаблонов сообщений */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $sms = null;
}
