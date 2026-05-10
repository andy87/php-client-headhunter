<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Chats\Common;

use Andy87\ClientsHh\Generated\Prompt\GetCommonChatListPrompt as BaseGetCommonChatListPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /common/chats.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-list
 *
 * @property int|null $page Страница
 * @property int|null $per_page Кол-во запрашиваемых чатов на странице
 * @property bool|null $filter_unread Только непрочитанные чаты
 * @property bool|null $filter_has_text_message Фильтр по чатам с активными переписками. Доступно только для работодателя
 * @property string|null $vacancy_status Связанность с вакансиями
 * @property string|null $filter_with_vacancy_ids Одна строка в query — перечень id вакансий в квадратных скобках, через запятую, например `[1,2,3]` (допустимы пробелы вокруг запятых). Строка разбирается в не более **100** целых id. Пусто `[]` или параметр не передан — без отбора по списку вакансий; вместе с `vacancy_status` см. сценарии в описании метода
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetChatListPrompt extends BaseGetCommonChatListPrompt
{
}
