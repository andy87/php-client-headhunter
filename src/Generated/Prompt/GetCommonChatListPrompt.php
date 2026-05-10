<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /common/chats.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-list
 */
class GetCommonChatListPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/common/chats';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'filter_unread' => ['style' => 'form', 'explode' => true], 'filter_has_text_message' => ['style' => 'form', 'explode' => true], 'vacancy_status' => ['style' => 'form', 'explode' => true], 'filter_with_vacancy_ids' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['page' => 'page', 'per_page' => 'per_page', 'filter_unread' => 'filter_unread', 'filter_has_text_message' => 'filter_has_text_message', 'vacancy_status' => 'vacancy_status', 'filter_with_vacancy_ids' => 'filter_with_vacancy_ids', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['page', 'per_page', 'filter_unread', 'filter_has_text_message', 'vacancy_status', 'filter_with_vacancy_ids', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int|null Страница */
    public ?int $page = null;

    /** @var int|null Кол-во запрашиваемых чатов на странице */
    public ?int $per_page = null;

    /** @var bool|null Только непрочитанные чаты */
    public ?bool $filter_unread = null;

    /** @var bool|null Фильтр по чатам с активными переписками. Доступно только для работодателя
 */
    public ?bool $filter_has_text_message = null;

    /** @var string|null Связанность с вакансиями */
    public ?string $vacancy_status = null;

    /** @var string|null Одна строка в query — перечень id вакансий в квадратных скобках, через запятую, например `[1,2,3]` (допустимы пробелы вокруг запятых). Строка разбирается в не более **100** целых id. Пусто `[]` или параметр не передан — без отбора по списку вакансий; вместе с `vacancy_status` см. сценарии в описании метода
 */
    public ?string $filter_with_vacancy_ids = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;
}
