<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\УправлениеВакансиями\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\VacancyProlongationPrompt as BaseVacancyProlongationPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /vacancies/{vacancy_id}/prolongate.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/vacancy-prolongation
 *
 * @property string $vacancy_id Идентификатор вакансии
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class ProlongationPrompt extends BaseVacancyProlongationPrompt
{
}
