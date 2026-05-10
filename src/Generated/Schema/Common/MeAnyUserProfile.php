<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeAnyUserProfile.
 */
class MeAnyUserProfile extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auth_type' => 'auth_type', 'is_admin' => 'is_admin', 'is_applicant' => 'is_applicant', 'is_application' => 'is_application', 'is_employer' => 'is_employer', 'is_employer_integration' => 'is_employer_integration', 'email' => 'email', 'first_name' => 'first_name', 'id' => 'id', 'is_anonymous' => 'is_anonymous', 'last_name' => 'last_name', 'mid_name' => 'mid_name', 'middle_name' => 'middle_name', 'phone' => 'phone'];

    protected const REQUIRED_FIELDS = ['is_application', 'is_applicant', 'is_employer', 'is_admin', 'is_employer_integration', 'auth_type', 'id', 'first_name', 'last_name'];

    protected const NULLABLE_FIELDS = ['auth_type', 'email', 'mid_name', 'middle_name', 'phone'];

    protected const CASTS = [];

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
}
