<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ApplicantNegotiations\Negotiation;

use Andy87\ClientsHh\Generated\Response\SendNegotiationMessageResponse as BaseSendNegotiationMessageResponse;

/**
 * Ответ HeadHunter API [POST] /negotiations/{nid}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/send-negotiation-message
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsAuthor $author Response field author
 * @property string $created_at Дата и время создания сообщения
 * @property bool $editable Можно ли редактировать текст сообщения
 * @property string $id Идентификатор сообщения
 * @property bool|null $read Можно ли прочитать сообщение
 * @property \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $state Состояние сообщения
 * @property string|null $text Текст сообщения
 * @property bool $viewed_by_me Прочитано ли сообщение смотрящим (для сообщений отправленных соискателем - всегда true)
 * @property bool $viewed_by_opponent Прочитано ли сообщение работодателем (для сообщений работодателя - true)
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressOutput|null $address Response field address
 */
class SendMessageResponse extends BaseSendNegotiationMessageResponse
{
}
