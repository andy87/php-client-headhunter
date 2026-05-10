<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesContact.
 */
class IncludesContact extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['comment' => 'comment', 'contact_value' => 'contact_value', 'kind' => 'kind', 'links' => 'links', 'need_verification' => 'need_verification', 'preferred' => 'preferred', 'type' => 'type', 'value' => 'value', 'verified' => 'verified'];

    protected const REQUIRED_FIELDS = ['type', 'preferred', 'contact_value', 'kind'];

    protected const NULLABLE_FIELDS = ['comment', 'contact_value', 'links', 'need_verification', 'verified'];

    protected const CASTS = ['links' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesLinks::class, 'type' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var string|null Комментарий к контакту */
    public ?string $comment = null;

    /** @var string|null Значение контакта */
    public ?string $contact_value;

    /** @var string Тип контакта - Эл. почта, телефон, основной способ связи или дополнительный способ связи */
    public string $kind;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesLinks|null Ссылки для открытия методов коммуникации по платформам */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesLinks $links = null;

    /** @var bool|null Требуется ли подтверждение телефона */
    public ?bool $need_verification = null;

    /** @var bool Является ли предпочтительным способом связи */
    public bool $preferred;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Тип контакта */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesContactEmailValue|null Поле устаревшее, необходимо использовать contact_value. Значение контакта. Для телефона - объект, для email - строка */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesContactEmailValue $value = null;

    /** @var bool|null Является ли телефон подтвержденным */
    public ?bool $verified = null;
}
