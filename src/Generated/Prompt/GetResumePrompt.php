<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /resumes/{resume_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume
 */
class GetResumePrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/resumes/{resume_id}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['with_negotiations_history' => ['style' => 'form', 'explode' => true], 'with_creds' => ['style' => 'form', 'explode' => true], 'with_job_search_status' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['resume_id' => 'resume_id', 'with_negotiations_history' => 'with_negotiations_history', 'with_creds' => 'with_creds', 'with_job_search_status' => 'with_job_search_status', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['resume_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['resume_id'];

    protected const QUERY_FIELDS = ['with_negotiations_history', 'with_creds', 'with_job_search_status', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор резюме */
    public string $resume_id;

    /** @var bool|null В случае, если передан данный параметр, в ответе добавится поле `negotiations_history.vacancies`.
Его формат подробно описан в методе [полной истории откликов/приглашений по резюме](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-resume-negotiations-history) и различается лишь тем,
что в данном случае список будет ограничен тремя вакансиями данного работодателя и последним изменением состояния отклика/приглашения по каждой из этих вакансий
 */
    public ?bool $with_negotiations_history = null;

    /** @var bool|null В случае, если передан данный параметр, в ответе добавится поле creds */
    public ?bool $with_creds = null;

    /** @var bool|null Параметр для просмотра в резюме статуса поиска кандидата
 */
    public ?bool $with_job_search_status = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;
}
