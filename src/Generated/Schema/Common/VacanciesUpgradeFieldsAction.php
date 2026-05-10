<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesUpgradeFieldsAction.
 */
class VacanciesUpgradeFieldsAction extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cart_id' => 'cart_id', 'price' => 'price', 'type' => 'type', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = ['cart_id', 'price', 'url'];

    protected const CASTS = [];

    /** @var int|null Идентификатор заказа, ожидающего активации. Возвращается только для действий с `actions.type=activate` */
    public ?int $cart_id = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsPrice|null Стоимость публикации. Возвращается только для действий с `actions.type=buy` */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsPrice $price = null;

    /** @var string Тип действия:

* `direct_upgrade` — публикации вакансий данного типа есть на счету. Вы можете изменить тип вакансии.
* `activate` — публикации вакансий данного типа есть в неактивированных заказах. Перейдите по ссылке, указанной в поле `actions.url`, и активируйте заказ. После этого станет доступно улучшение вакансии.
* `buy` — нет доступных публикаций вакансий данного типа. Перейдите по ссылке, указанной в поле `actions.url`, чтобы перейти к покупке публикаций нужного типа
 */
    public string $type;

    /** @var string|null Ссылка на действие */
    public ?string $url = null;
}
