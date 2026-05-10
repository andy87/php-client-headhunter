<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerNegotiations\Get;

use and_y87\ClientsHh\Generated\Prompt\GetResumeNegotiationsHistoryPrompt as BaseGetResumeNegotiationsHistoryPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /resumes/{resume_id}/negotiations_history.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume-negotiations-history
 *
 * @property string $resume_id Идентификатор резюме
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class ResumeNegotiationsHistoryPrompt extends BaseGetResumeNegotiationsHistoryPrompt
{
}
