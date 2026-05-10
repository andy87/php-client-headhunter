<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/addresses.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-addresses
 */
class GetEmployerAddressesPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/employers/{employer_id}/addresses';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['changed_after' => ['style' => 'form', 'explode' => true], 'manager_id' => ['style' => 'form', 'explode' => true], 'with_manager' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'changed_after' => 'changed_after', 'manager_id' => 'manager_id', 'with_manager' => 'with_manager', 'per_page' => 'per_page', 'page' => 'page', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['employer_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['employer_id'];

    protected const QUERY_FIELDS = ['changed_after', 'manager_id', 'with_manager', 'per_page', 'page', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя */
    public string $employer_id;

    /** @var string|null Позволяет загрузить все адреса, изменённые после этой даты (добавление, удаление или изменение адреса). Изменения возвращаются без пагинации. Значение указывается в формате [ISO 8601](#date-format) - `YYYY-MM-DDThh:mm:ss` или c указанием отступа для часового пояса `YYYY-MM-DDThh:mm:ss±hhmm`. Максимальное значение отступа от текущей даты - 7 дней. При передаче этого параметра, для каждого адреса в теле ответа возвращается поле `deleted`, указывающее на то, удалён ли адрес. Также, в случае передачи этого параметра, игнорируются все остальные */
    public ?string $changed_after = null;

    /** @var string|null Идентификатор менеджера создавшего адрес */
    public ?string $manager_id = null;

    /** @var bool|null Если true, ответ будет содержать информацию о менеджере создавшем адрес */
    public ?bool $with_manager = null;

    /** @var int|null Количество элементов на странице выдачи. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). Значение по умолчанию и максимальное значение per_page составляет 10000
 */
    public ?int $per_page = null;

    /** @var int|null Порядковый номер страницы в выдаче. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). По умолчанию нумерация начинается с 0 страницы
 */
    public ?int $page = null;

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
