<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\VacancyManagement\Active;

use Andy87\ClientsHh\Generated\Prompt\GetActiveVacancyListPrompt as BaseGetActiveVacancyListPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/vacancies/active.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-active-vacancy-list
 *
 * @property string $employer_id Идентификатор работодателя
 * @property float|null $page Номер страницы (считается от 0)
 * @property float|null $per_page Количество элементов
 * @property string|null $manager_id Идентификатор менеджера, вакансии которого будут получены в ответе. По умолчанию возвращаются вакансии текущего пользователя. Этот параметр нельзя передавать в комбинации с параметрами `manager_ids` и `all_accessible`. Если передать несколько `manager_id`, будет использован последний. Значения можно взять из [списка](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers)
 * @property string|null $manager_ids Идентификаторы менеджеров, вакансии которых будут получены в ответе. По умолчанию возвращаются вакансии текущего пользователя. Этот параметр нельзя передавать в комбинации с параметрами `manager_id` и `all_accessible`. Значения должны быть переданы строкой через запятую. Значения можно взять из [списка](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers)
 * @property string|null $text Строка для поиска по названию вакансии
 * @property string|null $area Идентификатор региона с вакансией. Чтобы получить идентификаторы регионов, в которых есть активные вакансии, воспользуйтесь [соответствующим методом](#tag/Informaciya-o-rabotodatele/operation/get-employer-vacancy-areas)
 * @property bool|null $all_accessible Позволяет получить все активные вакансии текущего пользователя вместе со всеми активными вакансиями менеджеров, к которым ему выдан доступ. Этот параметр нельзя передавать в комбинации с параметрами `manager_id` и `manager_ids`
 * @property string|null $department_id Идентификатор департамента работодателя, от имени которого размещается вакансия (если данная возможность доступна для компании). Значения можно взять из [списка](#tag/Informaciya-o-rabotodatele/operation/get-employer-departments)
 * @property string|null $resume_id Идентификатор резюме. Этот параметр нельзя передавать в комбинации с другими параметрами, только отдельно. Если параметр передан, в ответе возвращаются только те вакансии, которые подходят для указанного резюме, а также дополнительные поля
 * @property string|null $order_by Способ сортировки вакансий. Доступные значения перечислены в поле `employer_active_vacancies_order` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetVacancyListPrompt extends BaseGetActiveVacancyListPrompt
{
}
