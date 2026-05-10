<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\АвторизацияРаботодателя\Invalidate;

use Andy87\ClientsHh\Generated\Prompt\InvalidateTokenPrompt as BaseInvalidateTokenPrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /token.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/invalidate-token
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class TokenPrompt extends BaseInvalidateTokenPrompt
{
}
