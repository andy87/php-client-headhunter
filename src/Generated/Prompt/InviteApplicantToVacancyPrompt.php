<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /negotiations/phone_interview.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/invite-applicant-to-vacancy
 */
class InviteApplicantToVacancyPrompt extends PrivatePrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/negotiations/phone_interview';

    protected const CONTENT_TYPE = 'application/x-www-form-urlencoded';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'resume_id' => 'resume_id', 'vacancy_id' => 'vacancy_id', 'message' => 'message', 'send_sms' => 'send_sms'];

    protected const REQUIRED_FIELDS = ['resume_id', 'vacancy_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['resume_id', 'vacancy_id', 'message', 'send_sms'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var string Идентификатор резюме */
    public string $resume_id;

    /** @var string Идентификатор вакансии */
    public string $vacancy_id;

    /** @var string|null Сообщение, которое будет отправлено соискателю на электронную почту. Используйте [шаблоны](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-mail-templates) для получения текстов */
    public ?string $message = null;

    /** @var bool|null Если установлено `true`, соискателю будет отправлено SMS-уведомление о приглашении. Обратите внимание, что в SMS-сообщении используется стандартный текст, изменить его нельзя */
    public ?bool $send_sms = null;
}
