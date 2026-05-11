<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/vacancies/hidden.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-hidden-vacancies
 */
class GetHiddenVacanciesPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/employers/{employer_id}/vacancies/hidden';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['manager_id' => ['style' => 'form', 'explode' => true], 'order_by' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'manager_id' => 'manager_id', 'order_by' => 'order_by', 'per_page' => 'per_page', 'page' => 'page', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['employer_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['employer_id'];

    protected const QUERY_FIELDS = ['manager_id', 'order_by', 'per_page', 'page', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя */
    public string $employer_id;

    /** @var string|null Идентификатор менеджера. Передайте, если требуется получить удаленные вакансии другого менеджера.
Если передать несколько параметров `manager_id`, будет использоваться только последний.
По умолчанию возвращаются вакансии текущего пользователя
 */
    public ?string $manager_id = null;

    /** @var string|null Сортировка списка вакансий в архиве. Справочник с возможными значениями: `employer_hidden_vacancies_order` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?string $order_by = null;

    /** @var int|null Количество элементов на странице выдачи. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). Значение по умолчанию и максимальное значение `per_page` составляет 1000
 */
    public ?int $per_page = null;

    /** @var int|null Порядковый номер страницы в выдаче. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). По умолчанию нумерация начинается с 0 страницы
 */
    public ?int $page = null;

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
