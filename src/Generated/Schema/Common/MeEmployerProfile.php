<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeEmployerProfile.
 */
class MeEmployerProfile extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auth_type' => 'auth_type', 'is_admin' => 'is_admin', 'is_applicant' => 'is_applicant', 'is_application' => 'is_application', 'is_employer' => 'is_employer', 'is_employer_integration' => 'is_employer_integration', 'employer' => 'employer', 'personal_manager' => 'personal_manager'];

    protected const REQUIRED_FIELDS = ['is_application', 'is_applicant', 'is_employer', 'is_admin', 'is_employer_integration', 'auth_type'];

    protected const NULLABLE_FIELDS = ['auth_type'];

    protected const CASTS = ['employer' => \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileCompany::class, 'personal_manager' => \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfilePersonalManager::class];

    /** @var string|null Тип авторизации */
    public ?string $auth_type;

    /** @var bool Является ли текущий пользователь администратором сайта */
    public bool $is_admin;

    /** @var bool Является ли текущий пользователь соискателем */
    public bool $is_applicant;

    /** @var bool Является ли авторизованный клиент приложением */
    public bool $is_application;

    /** @var bool Является ли текущий пользователь менеджером */
    public bool $is_employer;

    /** @var bool Является ли текущий пользователь работодателем */
    public bool $is_employer_integration;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileCompany|null Schema field employer */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileCompany $employer = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfilePersonalManager|null Schema field personal_manager */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfilePersonalManager $personal_manager = null;
}
