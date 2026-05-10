<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\УслугиРаботодателя\Payable;

use Andy87\ClientsHh\Generated\Prompt\GetPayableApiMethodAccessPrompt as BaseGetPayableApiMethodAccessPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/method_access.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-payable-api-method-access
 *
 * @property string $employer_id Идентификатор работодателя. Можно узнать в [информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string $manager_id Идентификатор менеджера. Можно узнать в [информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetApiMethodAccessPrompt extends BaseGetPayableApiMethodAccessPrompt
{
}
