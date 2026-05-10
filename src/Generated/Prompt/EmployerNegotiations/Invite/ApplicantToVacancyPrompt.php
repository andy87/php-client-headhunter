<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerNegotiations\Invite;

use and_y87\ClientsHh\Generated\Prompt\InviteApplicantToVacancyPrompt as BaseInviteApplicantToVacancyPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /negotiations/phone_interview.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/invite-applicant-to-vacancy
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string $resume_id Идентификатор резюме
 * @property string $vacancy_id Идентификатор вакансии
 * @property string|null $message Сообщение, которое будет отправлено соискателю на электронную почту. Используйте [шаблоны](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-mail-templates) для получения текстов
 * @property bool|null $send_sms Если установлено `true`, соискателю будет отправлено SMS-уведомление о приглашении. Обратите внимание, что в SMS-сообщении используется стандартный текст, изменить его нельзя
 */
class ApplicantToVacancyPrompt extends BaseInviteApplicantToVacancyPrompt
{
}
