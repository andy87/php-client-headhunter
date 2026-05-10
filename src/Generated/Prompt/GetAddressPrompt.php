<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/addresses/{address_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-address
 */
class GetAddressPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/employers/{employer_id}/addresses/{address_id}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['with_manager' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'address_id' => 'address_id', 'with_manager' => 'with_manager', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['employer_id', 'address_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['employer_id', 'address_id'];

    protected const QUERY_FIELDS = ['with_manager', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя. Чтобы получить его, используйте метод [Информация о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info) */
    public string $employer_id;

    /** @var string Идентификатор адреса работодателя */
    public string $address_id;

    /** @var bool|null Если true, ответ будет содержать информацию о менеджере создавшем адрес */
    public ?bool $with_manager = null;

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
