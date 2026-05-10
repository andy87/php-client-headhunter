<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\МенеджерыРаботодателя\Employer;

use Andy87\ClientsHh\Generated\Prompt\GetEmployerManagersPrompt as BaseGetEmployerManagersPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/managers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-managers
 *
 * @property string $employer_id Идентификатор работодателя, который можно узнать [в информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property float|null $page Номер страницы
 * @property float|null $per_page Количество элементов
 * @property string|null $search_text Поисковая строка по имени менеджера
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetManagersPrompt extends BaseGetEmployerManagersPrompt
{
}
