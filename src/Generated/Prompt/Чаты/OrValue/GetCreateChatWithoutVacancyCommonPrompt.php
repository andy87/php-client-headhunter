<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Чаты\OrValue;

use Andy87\ClientsHh\Generated\Prompt\GetOrCreateChatWithoutVacancyCommonPrompt as BaseGetOrCreateChatWithoutVacancyCommonPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /common/chats/without_vacancy.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-or-create-chat-without-vacancy-common
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string $first_message Текст сообщения
 * @property string $resume_hash Хэш резюме, к которому будет привязан чат без вакансии
 */
class GetCreateChatWithoutVacancyCommonPrompt extends BaseGetOrCreateChatWithoutVacancyCommonPrompt
{
}
