<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /employers/{employer_id}/managers/{manager_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/edit-employer-manager
 */
class EditEmployerManagerPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/employers/{employer_id}/managers/{manager_id}';

    protected const CONTENT_TYPE = 'application/json';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'manager_id' => 'manager_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'additional_phone' => 'additional_phone', 'permissions' => 'permissions', 'phone' => 'phone', 'position' => 'position'];

    protected const REQUIRED_FIELDS = ['employer_id', 'manager_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['additional_phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class, 'permissions' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions::class], 'phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class];

    protected const PATH_FIELDS = ['employer_id', 'manager_id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['additional_phone', 'permissions', 'phone', 'position'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя, который можно узнать [в информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info) */
    public string $employer_id;

    /** @var string Идентификатор менеджера. Можно узнать из списка [менеджеров](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers) */
    public string $manager_id;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Дополнительный телефон менеджера */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $additional_phone = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions>|null Список прав, которые можно дать данному типу менеджера */
    public ?array $permissions = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Основной телефон менеджера */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone = null;

    /** @var string|null Body field position */
    public ?string $position = null;
}
