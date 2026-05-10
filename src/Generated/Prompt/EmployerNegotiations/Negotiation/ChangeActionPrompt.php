<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\EmployerNegotiations\Negotiation;

use Andy87\ClientsHh\Generated\Prompt\ChangeNegotiationActionPrompt as BaseChangeNegotiationActionPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /negotiations/{collection_name}/{nid}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/change-negotiation-action
 *
 * @property string $collection_name Название коллекции. Возможные значения указаны в поле `collections[].id` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations)
 * @property string $nid Идентификатор отклика
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class ChangeActionPrompt extends BaseChangeNegotiationActionPrompt
{
}
