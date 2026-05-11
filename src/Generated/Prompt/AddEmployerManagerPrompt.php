<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /employers/{employer_id}/managers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/add-employer-manager
 */
class AddEmployerManagerPrompt extends PrivatePrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/employers/{employer_id}/managers';

    protected const CONTENT_TYPE = 'application/json';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'additional_phone' => 'additional_phone', 'area' => 'area', 'email' => 'email', 'first_name' => 'first_name', 'is_main_contact_person' => 'is_main_contact_person', 'last_name' => 'last_name', 'manager_type' => 'manager_type', 'middle_name' => 'middle_name', 'permissions' => 'permissions', 'phone' => 'phone', 'position' => 'position'];

    protected const REQUIRED_FIELDS = ['employer_id', 'area', 'email', 'first_name', 'is_main_contact_person', 'last_name', 'manager_type', 'phone', 'position'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['additional_phone' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersAreaId::class, 'manager_type' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerTypeId::class, 'permissions' => [\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPermissions::class], 'phone' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class];

    protected const PATH_FIELDS = ['employer_id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['additional_phone', 'area', 'email', 'first_name', 'is_main_contact_person', 'last_name', 'manager_type', 'middle_name', 'permissions', 'phone', 'position'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя. Чтобы получить его, используйте метод [Информация о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info) */
    public string $employer_id;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Дополнительный телефон менеджера */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $additional_phone = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersAreaId Body field area */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersAreaId $area;

    /** @var string Адрес электронной почты менеджера */
    public string $email;

    /** @var string Имя менеджера */
    public string $first_name;

    /** @var bool Является ли менеджер основным контактным лицом */
    public bool $is_main_contact_person;

    /** @var string Фамилия менеджера */
    public string $last_name;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerTypeId Body field manager_type */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerTypeId $manager_type;

    /** @var string|null Отчество менеджера */
    public ?string $middle_name = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPermissions>|null Список [прав менеджера](#tag/Menedzhery-rabotodatelya/operation/get-employer-manager-types) */
    public ?array $permissions = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone Основной телефон менеджера */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone;

    /** @var string Должность менеджера */
    public string $position;
}
