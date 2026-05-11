<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /salary_statistics/paid/salary_evaluation/{area_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-salary-evaluation
 */
class GetSalaryEvaluationPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/salary_statistics/paid/salary_evaluation/{area_id}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['exclude_area' => ['style' => 'form', 'explode' => true], 'employee_level' => ['style' => 'form', 'explode' => true], 'industry' => ['style' => 'form', 'explode' => true], 'speciality' => ['style' => 'form', 'explode' => true], 'extend_sources' => ['style' => 'form', 'explode' => true], 'position_name' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['area_id' => 'area_id', 'exclude_area' => 'exclude_area', 'employee_level' => 'employee_level', 'industry' => 'industry', 'speciality' => 'speciality', 'extend_sources' => 'extend_sources', 'position_name' => 'position_name', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['area_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['area_id'];

    protected const QUERY_FIELDS = ['exclude_area', 'employee_level', 'industry', 'speciality', 'extend_sources', 'position_name', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Код [региона](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-salary-areas), по которому будет построена выборка для формирования отчета
 */
    public string $area_id;

    /** @var string|null Коды [регионов](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-salary-areas), которые будут исключены из выборки для формирования отчета. Параметр позволяет получить оценку на региональном рынке за исключением определенных городов или областей
 */
    public ?string $exclude_area = null;

    /** @var string|null Справочник [уровни компетенций](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-employee-levels), которые будут включены в выборку для формирования отчета
 */
    public ?string $employee_level = null;

    /** @var string|null Справочник [Коды отраслей](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-industries), по которым будет построена выборка для формирования отчета
 */
    public ?string $industry = null;

    /** @var string|null Справочник [Коды профобластей и специализаций](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-professional-areas), которые будут включены в выборку для формирования отчета
 */
    public ?string $speciality = null;

    /** @var bool|null Использовать ли данные из резюме и вакансий, если по указанным параметрам не нашлось данных в банке зарплат. По умолчанию — `false`
 */
    public ?bool $extend_sources = null;

    /** @var string|null Наименование должности. Если не переданы параметры `speciality` или `employee_level`, сервис самостоятельно определит возможные специализации и уровень специалиста по указанной должности и отрасли, и построит отчет по ним
 */
    public ?string $position_name = null;

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
