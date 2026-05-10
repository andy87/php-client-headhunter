<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\VacancyManagement\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\AddVacancyToArchivePrompt as BaseAddVacancyToArchivePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /employers/{employer_id}/vacancies/archived/{vacancy_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/add-vacancy-to-archive
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string $vacancy_id Идентификатор вакансии
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class AddToArchivePrompt extends BaseAddVacancyToArchivePrompt
{
}
