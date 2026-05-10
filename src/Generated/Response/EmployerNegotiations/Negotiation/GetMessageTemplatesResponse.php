<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\EmployerNegotiations\Negotiation;

use Andy87\ClientsHh\Generated\Response\GetNegotiationMessageTemplatesResponse as BaseGetNegotiationMessageTemplatesResponse;

/**
 * Ответ HeadHunter API [GET] /message_templates/{template}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-message-templates
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $mail Список шаблонов сообщений
 * @property \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate|null $sms Список шаблонов сообщений
 */
class GetMessageTemplatesResponse extends BaseGetNegotiationMessageTemplatesResponse
{
}
