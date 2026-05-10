<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\МенеджерыРаботодателя\Employer;

use Andy87\ClientsHh\Generated\Prompt\GetEmployerManagerTypesPrompt as BaseGetEmployerManagerTypesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/manager_types.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-manager-types
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetManagerTypesPrompt extends BaseGetEmployerManagerTypesPrompt
{
}
