<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesEmployerApplicantServicesObject.
 */
class IncludesEmployerApplicantServicesObject extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['applicant_services' => 'applicant_services'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['applicant_services' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices|null Schema field applicant_services */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices $applicant_services = null;
}
