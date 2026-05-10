<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationMessageTemplates.
 */
class NegotiationsNegotiationMessageTemplates extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['mail' => 'mail', 'sms' => 'sms'];

    protected const REQUIRED_FIELDS = ['mail'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['mail' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class, 'sms' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate Список шаблонов сообщений */
    public \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $mail;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate|null Список шаблонов сообщений */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $sms = null;
}
