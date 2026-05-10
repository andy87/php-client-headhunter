<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\EmployerServices\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\GetVacancyAvailableServicesListPrompt as BaseGetVacancyAvailableServicesListPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/services/available_publications.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-available-services-list
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string|null $area_id Регион, по которому необходимо получить доступные варианты публикации
 * @property string|null $professional_role_id Профессиональная роль, по которой необходимо получить доступные варианты публикации
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetAvailableServicesListPrompt extends BaseGetVacancyAvailableServicesListPrompt
{
}
