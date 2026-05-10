<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\VacancyManagement\Archived;

use and_y87\ClientsHh\Generated\Prompt\GetArchivedVacanciesPrompt as BaseGetArchivedVacanciesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/vacancies/archived.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-archived-vacancies
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string|null $manager_id Идентификатор менеджера из [списка менеджеров работодателя](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers). Передайте, если требуется получить вакансии другого менеджера. Если передать несколько параметров `manager_id`, будет использоваться только последний. По умолчанию возвращаются вакансии текущего пользователя
 * @property string|null $order_by Сортировка списка вакансий в архиве. Справочник с возможными значениями: `employer_archived_vacancies_order` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property int|null $per_page Количество элементов на странице выдачи. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). Значение по умолчанию и максимальное значение `per_page` составляет 1000
 * @property int|null $page Порядковый номер страницы в выдаче. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). По умолчанию нумерация начинается с 0 страницы
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetVacanciesPrompt extends BaseGetArchivedVacanciesPrompt
{
}
