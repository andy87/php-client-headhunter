<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/vacancies/active.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-active-vacancy-list
 */
class GetActiveVacancyListPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/employers/{employer_id}/vacancies/active';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'manager_id' => ['style' => 'form', 'explode' => true], 'manager_ids' => ['style' => 'form', 'explode' => true], 'text' => ['style' => 'form', 'explode' => true], 'area' => ['style' => 'form', 'explode' => true], 'all_accessible' => ['style' => 'form', 'explode' => true], 'department_id' => ['style' => 'form', 'explode' => true], 'resume_id' => ['style' => 'form', 'explode' => true], 'order_by' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'page' => 'page', 'per_page' => 'per_page', 'manager_id' => 'manager_id', 'manager_ids' => 'manager_ids', 'text' => 'text', 'area' => 'area', 'all_accessible' => 'all_accessible', 'department_id' => 'department_id', 'resume_id' => 'resume_id', 'order_by' => 'order_by', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['employer_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['employer_id'];

    protected const QUERY_FIELDS = ['page', 'per_page', 'manager_id', 'manager_ids', 'text', 'area', 'all_accessible', 'department_id', 'resume_id', 'order_by', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя */
    public string $employer_id;

    /** @var float|null Номер страницы (считается от 0) */
    public ?float $page = null;

    /** @var float|null Количество элементов */
    public ?float $per_page = null;

    /** @var string|null Идентификатор менеджера, вакансии которого будут получены в ответе. По умолчанию возвращаются вакансии текущего пользователя.
Этот параметр нельзя передавать в комбинации с параметрами `manager_ids` и `all_accessible`.
Если передать несколько `manager_id`, будет использован последний. Значения можно взять из [списка](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers)
 */
    public ?string $manager_id = null;

    /** @var string|null Идентификаторы менеджеров, вакансии которых будут получены в ответе. По умолчанию возвращаются вакансии текущего пользователя.
Этот параметр нельзя передавать в комбинации с параметрами `manager_id` и `all_accessible`.
Значения должны быть переданы строкой через запятую.
Значения можно взять из [списка](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers)
 */
    public ?string $manager_ids = null;

    /** @var string|null Строка для поиска по названию вакансии */
    public ?string $text = null;

    /** @var string|null Идентификатор региона с вакансией. Чтобы получить идентификаторы регионов, в которых есть активные вакансии, воспользуйтесь [соответствующим методом](#tag/Informaciya-o-rabotodatele/operation/get-employer-vacancy-areas) */
    public ?string $area = null;

    /** @var bool|null Позволяет получить все активные вакансии текущего пользователя вместе со всеми активными вакансиями менеджеров, к которым ему выдан доступ.
Этот параметр нельзя передавать в комбинации с параметрами `manager_id` и `manager_ids`
 */
    public ?bool $all_accessible = null;

    /** @var string|null Идентификатор департамента работодателя, от имени которого размещается вакансия (если данная возможность доступна для компании).
Значения можно взять из [списка](#tag/Informaciya-o-rabotodatele/operation/get-employer-departments)
 */
    public ?string $department_id = null;

    /** @var string|null Идентификатор резюме. Этот параметр нельзя передавать в комбинации с другими параметрами, только отдельно. Если параметр передан, в ответе возвращаются только те вакансии, которые подходят для указанного резюме, а также дополнительные поля */
    public ?string $resume_id = null;

    /** @var string|null Способ сортировки вакансий. Доступные значения перечислены в поле `employer_active_vacancies_order` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $order_by = null;

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
