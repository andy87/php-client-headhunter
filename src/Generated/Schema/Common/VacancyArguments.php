<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyArguments.
 */
class VacancyArguments extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'required' => 'required', 'required_arguments' => 'required_arguments'];

    protected const REQUIRED_FIELDS = ['id', 'required', 'required_arguments'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['required_arguments' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class]];

    /** @var string Идентификатор аргумента. Возможные значения:

* `resume_id` — идентификатор резюме.
* `vacancy_id` — идентификатор вакансии.
* `message` — сообщение, которое будет отправлено соискателю на электронную почту. Используйте [шаблоны](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-mail-templates) для получения текстов.
* `send_sms` — уведомлять ли соискателя о приглашении с помощью SMS. Значение по умолчанию — `false`. Обратите внимание: в SMS-сообщении используется стандартный текст, изменить его нельзя
* `address_id` — идентификатор [адреса](#tag/Adresa-rabotodatelya), который будет указан в приглашении
 */
    public string $id;

    /** @var bool Обязательность аргумента */
    public bool $required;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesId> Идентификаторы аргументов, которые необходимо приложить, если указан данный аргумент. Например, адрес является необязательным, но при его указании необходимо указать также и сообщение */
    public array $required_arguments;
}
