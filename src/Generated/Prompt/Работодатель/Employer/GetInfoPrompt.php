<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Работодатель\Employer;

use Andy87\ClientsHh\Generated\Prompt\GetEmployerInfoPrompt as BaseGetEmployerInfoPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-info
 *
 * @property string $employer_id Идентификатор работодателя, который можно получить в [списке работодателей](#tag/Rabotodatel/operation/search-employer)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetInfoPrompt extends BaseGetEmployerInfoPrompt
{
}
