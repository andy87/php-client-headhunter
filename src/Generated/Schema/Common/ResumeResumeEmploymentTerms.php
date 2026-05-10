<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeResumeEmploymentTerms.
 */
class ResumeResumeEmploymentTerms extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employment_form' => 'employment_form', 'work_format' => 'work_format'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['employment_form' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse::class, 'work_format' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse|null Schema field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse $employment_form = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse|null Schema field work_format */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse $work_format = null;
}
