<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ResumeView\Get;

use Andy87\ClientsHh\Generated\Prompt\GetResumePrompt as BaseGetResumePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /resumes/{resume_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume
 *
 * @property string $resume_id Идентификатор резюме
 * @property bool|null $with_negotiations_history В случае, если передан данный параметр, в ответе добавится поле `negotiations_history.vacancies`. Его формат подробно описан в методе [полной истории откликов/приглашений по резюме](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-resume-negotiations-history) и различается лишь тем, что в данном случае список будет ограничен тремя вакансиями данного работодателя и последним изменением состояния отклика/приглашения по каждой из этих вакансий
 * @property bool|null $with_creds В случае, если передан данный параметр, в ответе добавится поле creds
 * @property bool|null $with_job_search_status Параметр для просмотра в резюме статуса поиска кандидата
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class ResumePrompt extends BaseGetResumePrompt
{
}
