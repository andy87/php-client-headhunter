<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\ApplicantNegotiations\Negotiation;

use and_y87\ClientsHh\Generated\Response\GetNegotiationMessagesResponse as BaseGetNegotiationMessagesResponse;

/**
 * Ответ HeadHunter API [GET] /negotiations/{nid}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-messages
 *
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsMessagesGet>|null $items Список сообщений
 */
class GetMessagesResponse extends BaseGetNegotiationMessagesResponse
{
}
