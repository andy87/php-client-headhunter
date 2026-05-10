<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\ApplicantComments\Applicant;

use and_y87\ClientsHh\Generated\Prompt\GetApplicantCommentsListPrompt as BaseGetApplicantCommentsListPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /applicant_comments/{applicant_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-applicant-comments-list
 *
 * @property string $applicant_id Идентификатор соискателя, который можно узнать из поля `owner` [в резюме](#tag/Prosmotr-rezyume/operation/get-resume)
 * @property float|null $page Номер страницы
 * @property float|null $per_page Результатов на странице
 * @property string|null $order_by Сортировка комментариев. Доступные значения перечислены [в справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `applicant_comments_order`
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetCommentsListPrompt extends BaseGetApplicantCommentsListPrompt
{
}
