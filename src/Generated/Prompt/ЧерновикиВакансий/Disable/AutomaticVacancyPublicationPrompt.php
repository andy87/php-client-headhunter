<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ЧерновикиВакансий\Disable;

use Andy87\ClientsHh\Generated\Prompt\DisableAutomaticVacancyPublicationPrompt as BaseDisableAutomaticVacancyPublicationPrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /vacancies/auto_publication.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/disable-automatic-vacancy-publication
 *
 * @property string $draft_id Идентификатор черновика
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class AutomaticVacancyPublicationPrompt extends BaseDisableAutomaticVacancyPublicationPrompt
{
}
