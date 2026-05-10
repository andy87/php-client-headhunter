<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ApplicantNegotiationMessages\Negotiation;

use Andy87\ClientsHh\Generated\Prompt\GetNegotiationMessagesPrompt as BaseGetNegotiationMessagesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /negotiations/{nid}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-messages
 *
 * @property float|null $page Номер страницы
 * @property float|null $per_page Количество элементов
 * @property string $nid Идентификатор отклика
 * @property bool|null $with_text_only Вернуть непустые сообщения (содержат текст в параметре `text`)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetMessagesPrompt extends BaseGetNegotiationMessagesPrompt
{
}
