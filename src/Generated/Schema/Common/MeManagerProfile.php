<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeManagerProfile.
 */
class MeManagerProfile extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auth_type' => 'auth_type', 'is_admin' => 'is_admin', 'is_applicant' => 'is_applicant', 'is_application' => 'is_application', 'is_employer' => 'is_employer', 'is_employer_integration' => 'is_employer_integration', 'email' => 'email', 'first_name' => 'first_name', 'id' => 'id', 'is_anonymous' => 'is_anonymous', 'last_name' => 'last_name', 'mid_name' => 'mid_name', 'middle_name' => 'middle_name', 'phone' => 'phone', 'employer' => 'employer', 'is_in_search' => 'is_in_search', 'manager' => 'manager', 'negotiations_url' => 'negotiations_url', 'personal_manager' => 'personal_manager', 'resumes_url' => 'resumes_url'];

    protected const REQUIRED_FIELDS = ['is_application', 'is_applicant', 'is_employer', 'is_admin', 'is_employer_integration', 'auth_type', 'id', 'first_name', 'last_name'];

    protected const NULLABLE_FIELDS = ['auth_type', 'email', 'mid_name', 'middle_name', 'phone', 'is_in_search', 'negotiations_url', 'resumes_url'];

    protected const CASTS = ['employer' => \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileCompanyDeprecated::class, 'manager' => \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileManager::class, 'personal_manager' => \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfilePersonalManager::class];

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

    /** @var string|null Email текущего пользователя */
    public ?string $email = null;

    /** @var string Имя текущего пользователя */
    public string $first_name;

    /** @var string Идентификатор текущего пользователя */
    public string $id;

    /** @var bool|null Schema field is_anonymous */
    public ?bool $is_anonymous = null;

    /** @var string Фамилия текущего пользователя */
    public string $last_name;

    /** @var string|null Schema field mid_name */
    public ?string $mid_name = null;

    /** @var string|null Отчество текущего пользователя */
    public ?string $middle_name = null;

    /** @var string|null Телефон текущего пользователя */
    public ?string $phone = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileCompanyDeprecated|null Schema field employer */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileCompanyDeprecated $employer = null;

    /** @var array<string, mixed>|null Schema field is_in_search */
    public ?array $is_in_search = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileManager|null Schema field manager */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfileManager $manager = null;

    /** @var array<string, mixed>|null Schema field negotiations_url */
    public ?array $negotiations_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfilePersonalManager|null Schema field personal_manager */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\MeEmployerProfilePersonalManager $personal_manager = null;

    /** @var array<string, mixed>|null Schema field resumes_url */
    public ?array $resumes_url = null;
}
