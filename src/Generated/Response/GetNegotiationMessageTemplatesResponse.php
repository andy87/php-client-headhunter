<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /message_templates/{template}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-message-templates
 */
class GetNegotiationMessageTemplatesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['mail' => 'mail', 'sms' => 'sms'];

    protected const REQUIRED_FIELDS = ['mail'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['mail' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class, 'sms' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplates::class;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate Список шаблонов сообщений */
    public \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $mail;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate|null Список шаблонов сообщений */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $sms = null;
}
