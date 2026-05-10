<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Chats\Common;

use and_y87\ClientsHh\Generated\Response\GetCommonChatListResponse as BaseGetCommonChatListResponse;

/**
 * Ответ HeadHunter API [GET] /common/chats.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-list
 *
 * @property array<int, array<string, mixed>> $items Список чатов
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 */
class GetChatListResponse extends BaseGetCommonChatListResponse
{
}
