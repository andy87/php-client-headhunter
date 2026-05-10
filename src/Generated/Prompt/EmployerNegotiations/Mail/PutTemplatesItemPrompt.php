<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\EmployerNegotiations\Mail;

use Andy87\ClientsHh\Generated\Prompt\PutMailTemplatesItemPrompt as BasePutMailTemplatesItemPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /employers/{employer_id}/mail_templates/{template_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/put-mail-templates-item
 *
 * @property string $employer_id Идентификатор работодателя, который можно узнать [в информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string $template_id Идентификатор шаблона для изменения из [списка доступных шаблонов ответов соискателю](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-mail-templates)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string $text Текст шаблона
 */
class PutTemplatesItemPrompt extends BasePutMailTemplatesItemPrompt
{
}
