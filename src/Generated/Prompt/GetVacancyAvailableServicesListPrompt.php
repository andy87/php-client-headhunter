<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/services/available_publications.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-available-services-list
 */
class GetVacancyAvailableServicesListPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/employers/{employer_id}/services/available_publications';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['area_id' => ['style' => 'form', 'explode' => true], 'professional_role_id' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'area_id' => 'area_id', 'professional_role_id' => 'professional_role_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['employer_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['employer_id'];

    protected const QUERY_FIELDS = ['area_id', 'professional_role_id', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя */
    public string $employer_id;

    /** @var string|null Регион, по которому необходимо получить доступные варианты публикации */
    public ?string $area_id = null;

    /** @var string|null Профессиональная роль, по которой необходимо получить доступные варианты публикации */
    public ?string $professional_role_id = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;
}
