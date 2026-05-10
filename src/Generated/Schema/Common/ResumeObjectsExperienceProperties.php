<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsExperienceProperties.
 */
class ResumeObjectsExperienceProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'company' => 'company', 'company_id' => 'company_id', 'company_url' => 'company_url', 'employer' => 'employer', 'end' => 'end', 'id' => 'id', 'industries' => 'industries', 'industry' => 'industry', 'position' => 'position', 'start' => 'start', 'description' => 'description'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['area', 'company', 'company_id', 'company_url', 'employer', 'end', 'id', 'industry', 'description'];

    protected const CASTS = ['industries' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl|null Регион расположения организации. Элемент [справочника регионов](#tag/Obshie-spravochniki/operation/get-areas) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl $area = null;

    /** @var string|null Название организации */
    public ?string $company = null;

    /** @var string|null Уникальный идентификатор организации */
    public ?string $company_id = null;

    /** @var string|null Сайт компании */
    public ?string $company_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployerInfoShort|null Работодатель */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployerInfoShort $employer = null;

    /** @var string|null Окончание работы (дата в формате `ГГГГ-ММ-ДД`) */
    public ?string $end = null;

    /** @var string|null Идентификатор */
    public ?string $id = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Список отраслей компании. Возможные значения приведены в [справочнике индустрий](#tag/Obshie-spravochniki/operation/get-industries) */
    public ?array $industries = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsIndustry|null Отрасль компании */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsIndustry $industry = null;

    /** @var string|null Должность */
    public ?string $position = null;

    /** @var string|null Начало работы (дата в формате `ГГГГ-ММ-ДД`) */
    public ?string $start = null;

    /** @var string|null Обязанности, функции, достижения */
    public ?string $description = null;
}
