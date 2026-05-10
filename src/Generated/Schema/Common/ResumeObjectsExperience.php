<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsExperience.
 */
class ResumeObjectsExperience extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'company' => 'company', 'company_id' => 'company_id', 'company_url' => 'company_url', 'employer' => 'employer', 'end' => 'end', 'id' => 'id', 'industries' => 'industries', 'industry' => 'industry', 'position' => 'position', 'start' => 'start', 'description' => 'description'];

    protected const REQUIRED_FIELDS = ['start', 'position', 'industries'];

    protected const NULLABLE_FIELDS = ['area', 'company', 'company_id', 'company_url', 'employer', 'end', 'id', 'industry', 'description'];

    protected const CASTS = ['industries' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl|null Регион расположения организации. Элемент [справочника регионов](#tag/Obshie-spravochniki/operation/get-areas) */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl $area = null;

    /** @var string|null Название организации */
    public ?string $company = null;

    /** @var string|null Уникальный идентификатор организации */
    public ?string $company_id = null;

    /** @var string|null Сайт компании */
    public ?string $company_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployerInfoShort|null Работодатель */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployerInfoShort $employer = null;

    /** @var string|null Окончание работы (дата в формате `ГГГГ-ММ-ДД`) */
    public ?string $end = null;

    /** @var string|null Идентификатор */
    public ?string $id = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Список отраслей компании. Возможные значения приведены в [справочнике индустрий](#tag/Obshie-spravochniki/operation/get-industries) */
    public array $industries;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsIndustry|null Отрасль компании */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsIndustry $industry = null;

    /** @var string Должность */
    public string $position;

    /** @var string Начало работы (дата в формате `ГГГГ-ММ-ДД`) */
    public string $start;

    /** @var string|null Обязанности, функции, достижения */
    public ?string $description = null;
}
