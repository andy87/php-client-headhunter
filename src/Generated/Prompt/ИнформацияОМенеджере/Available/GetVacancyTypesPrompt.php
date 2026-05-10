<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ИнформацияОМенеджере\Available;

use Andy87\ClientsHh\Generated\Prompt\GetAvailableVacancyTypesPrompt as BaseGetAvailableVacancyTypesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/vacancies/available_types.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-available-vacancy-types
 *
 * @property string $employer_id Идентификатор работодателя, который можно узнать [в информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string $manager_id Идентификатор менеджера, который можно узнать [в информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetVacancyTypesPrompt extends BaseGetAvailableVacancyTypesPrompt
{
}
