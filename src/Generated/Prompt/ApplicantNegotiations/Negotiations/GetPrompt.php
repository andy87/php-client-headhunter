<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ApplicantNegotiations\Negotiations;

use Andy87\ClientsHh\Generated\Prompt\GetNegotiationsPrompt as BaseGetNegotiationsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /negotiations.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiations
 *
 * @property float|null $page Номер страницы
 * @property float|null $per_page Количество элементов на странице
 * @property string|null $order_by Тип сортировки. Возможные значения указаны в поле `negotiations_order` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property string|null $order Направление сортировки. Возможные значения: `asc` — по возрастанию, `desc` — по убыванию
 * @property string|null $vacancy_id Фильтр по ID вакансии. Обязательный для работодателя
 * @property string|null $status Запрос вернет только те отклики, которые находятся в определенном статусе. Возможные значения указаны в поле `applicant_negotiation_status` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property bool|null $has_updates Если передан `true`, запрос вернет только те отклики, для которых есть непросмотренные сообщения. По умолчанию `false`
 * @property bool|null $with_job_search_status Если передан `true`, запрос вернет статус поиска работы кандидатом
 * @property bool|null $with_generated_collections Если передан `true`, запрос вернет информацию по [сгенерированным коллекциям](#term-collection) откликов/приглашений для данной вакансии. Чтобы получить выгрузку по нескольким коллекциям, запросите их последовательно. По умолчанию `false`
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetPrompt extends BaseGetNegotiationsPrompt
{
}
