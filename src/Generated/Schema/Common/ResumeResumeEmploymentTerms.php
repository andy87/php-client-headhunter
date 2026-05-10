<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeResumeEmploymentTerms.
 */
class ResumeResumeEmploymentTerms extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employment_form' => 'employment_form', 'work_format' => 'work_format'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse::class, 'work_format' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse|null Schema field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse $employment_form = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse|null Schema field work_format */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse $work_format = null;
}
