<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /negotiations/{id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/put-negotiations-collection-to-next-state
 */
class PutNegotiationsCollectionToNextStatePrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/negotiations/{id}';

    protected const CONTENT_TYPE = 'application/x-www-form-urlencoded';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['id' => 'id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'topic_id' => 'topic_id', 'address_id' => 'address_id', 'message' => 'message', 'send_sms' => 'send_sms'];

    protected const REQUIRED_FIELDS = ['id', 'topic_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['topic_id', 'address_id', 'message', 'send_sms'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор [коллекции](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) топиков, в которую будет перенесено состояние отклика */
    public string $id;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var string Идентификаторы откликов. Допускается передавать не более 50 идентификаторов,
перечисляя их через амперсанд, например: `topic_id=1&topic_id=2&topic_id=3...&topic_id=50`
 */
    public string $topic_id;

    /** @var string|null Идентификатор [адреса](https://api.hh.ru/openapi/redoc#tag/Adresa-rabotodatelya), который будет указан в приглашении */
    public ?string $address_id = null;

    /** @var string|null Сообщение, которое будет отправлено соискателю на электронную почту. Используйте [шаблоны](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-mail-templates) для получения текстов */
    public ?string $message = null;

    /** @var bool|null Если установлено `true`, соискателю будет отправлено SMS-уведомление о приглашении. Обратите внимание, что в SMS-сообщении используется стандартный текст, изменить его нельзя */
    public ?bool $send_sms = null;
}
