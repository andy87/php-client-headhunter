<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['mail' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class, 'sms' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate::class];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplates::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate Список шаблонов сообщений */
    public \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $mail;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate|null Список шаблонов сообщений */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $sms = null;
}
