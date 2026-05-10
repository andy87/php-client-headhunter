<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerNegotiations\Negotiation;

use and_y87\ClientsHh\Generated\Response\GetNegotiationMessageTemplatesResponse as BaseGetNegotiationMessageTemplatesResponse;

/**
 * Ответ HeadHunter API [GET] /message_templates/{template}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-message-templates
 *
 * @property \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate $mail Список шаблонов сообщений
 * @property \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationMessageTemplate|null $sms Список шаблонов сообщений
 */
class GetMessageTemplatesResponse extends BaseGetNegotiationMessageTemplatesResponse
{
}
