<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /vacancies/{vacancy_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/edit-vacancy
 */
class EditVacancyPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/vacancies/{vacancy_id}';

    protected const CONTENT_TYPE = 'application/json';

    protected const QUERY_PARAMETER_STYLES = ['ignore_duplicates' => ['style' => 'form', 'explode' => true], 'ignore_replacement_warning' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['vacancy_id' => 'vacancy_id', 'ignore_duplicates' => 'ignore_duplicates', 'ignore_replacement_warning' => 'ignore_replacement_warning', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'body' => 'body'];

    protected const REQUIRED_FIELDS = ['vacancy_id', 'body'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['body' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEdit::class];

    protected const PATH_FIELDS = ['vacancy_id'];

    protected const QUERY_FIELDS = ['ignore_duplicates', 'ignore_replacement_warning', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = 'body';

    /** @var string Идентификатор вакансии */
    public string $vacancy_id;

    /** @var bool|null Игнорировать появление дубликата после редактирования вакансии. По умолчанию — `false` */
    public ?bool $ignore_duplicates = null;

    /** @var bool|null При значительном изменении вакансии ошибка будет проигнорирована, что может привести к риску блокировки. По умолчанию — `true` */
    public ?bool $ignore_replacement_warning = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEdit Request body */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyEdit $body;
}
