<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeApplicantProfile.
 */
class MeApplicantProfile extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auth_type' => 'auth_type', 'is_admin' => 'is_admin', 'is_applicant' => 'is_applicant', 'is_application' => 'is_application', 'is_employer' => 'is_employer', 'is_employer_integration' => 'is_employer_integration', 'email' => 'email', 'first_name' => 'first_name', 'id' => 'id', 'is_anonymous' => 'is_anonymous', 'last_name' => 'last_name', 'mid_name' => 'mid_name', 'middle_name' => 'middle_name', 'phone' => 'phone', 'counters' => 'counters', 'employer' => 'employer', 'is_in_search' => 'is_in_search', 'linked_socials' => 'linked_socials', 'manager' => 'manager', 'negotiations_url' => 'negotiations_url', 'personal_manager' => 'personal_manager', 'profile_videos' => 'profile_videos', 'resumes_url' => 'resumes_url', 'user_statuses' => 'user_statuses'];

    protected const REQUIRED_FIELDS = ['is_application', 'is_applicant', 'is_employer', 'is_admin', 'is_employer_integration', 'auth_type', 'id', 'first_name', 'last_name', 'counters', 'resumes_url', 'negotiations_url', 'is_in_search', 'linked_socials'];

    protected const NULLABLE_FIELDS = ['auth_type', 'email', 'mid_name', 'middle_name', 'phone', 'employer', 'manager', 'personal_manager'];

    protected const CASTS = ['counters' => \Andy87\ClientsHh\Generated\Schema\Common\MeApplicantProfileCounters::class, 'linked_socials' => [\Andy87\ClientsHh\Generated\Schema\Common\AuthMethodsSocialNetwork::class], 'profile_videos' => \Andy87\ClientsHh\Generated\Schema\Common\ProfileVideosList::class, 'user_statuses' => \Andy87\ClientsHh\Generated\Schema\Common\UserStatusesApplicant::class];

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

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\MeApplicantProfileCounters Schema field counters */
    public \Andy87\ClientsHh\Generated\Schema\Common\MeApplicantProfileCounters $counters;

    /** @var array<string, mixed>|null Schema field employer */
    public ?array $employer = null;

    /** @var bool Имеет ли текущий пользователь статус "ищу работу" */
    public bool $is_in_search;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\AuthMethodsSocialNetwork> Подключённые соцсети как способы авторизации */
    public array $linked_socials;

    /** @var array<string, mixed>|null Schema field manager */
    public ?array $manager = null;

    /** @var string URL, на который нужно сделать GET-запрос, чтобы получить список откликов/приглашений текущего пользователя
 */
    public string $negotiations_url;

    /** @var array<string, mixed>|null Schema field personal_manager */
    public ?array $personal_manager = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ProfileVideosList|null Schema field profile_videos */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ProfileVideosList $profile_videos = null;

    /** @var string URL, на который нужно сделать GET-запрос, чтобы получить список резюме текущего пользователя
 */
    public string $resumes_url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\UserStatusesApplicant|null Schema field user_statuses */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\UserStatusesApplicant $user_statuses = null;
}
