<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ApplicantNegotiationMessages\Negotiation;

use Andy87\ClientsHh\Generated\Prompt\SendNegotiationMessagePrompt as BaseSendNegotiationMessagePrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /negotiations/{nid}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/send-negotiation-message
 *
 * @property string $nid Идентификатор отклика/приглашения
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string|null $message Сообщение отклика/приглашения
 */
class SendMessagePrompt extends BaseSendNegotiationMessagePrompt
{
}
