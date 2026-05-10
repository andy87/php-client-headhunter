<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Чаты\Common;

use Andy87\ClientsHh\Generated\Prompt\GetCommonChatFilesUploadLinksPrompt as BaseGetCommonChatFilesUploadLinksPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /common/chats/files/upload_links.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-files-upload-links
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetChatFilesUploadLinksPrompt extends BaseGetCommonChatFilesUploadLinksPrompt
{
}
