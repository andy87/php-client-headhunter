<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsVacancyAddEditBadJsonDataError.
 */
class ErrorsVacancyAddEditBadJsonDataError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'pointer' => 'pointer', 'reason' => 'reason', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = ['description'];

    protected const CASTS = [];

    /** @var string|null Описание ошибки */
    public ?string $description = null;

    /** @var string|null Путь до параметра, в котором возникла ошибка.

Для указания параметра используется формат JsonPointer [RFC 6901](https://datatracker.ietf.org/doc/html/rfc6901)
 */
    public ?string $pointer = null;

    /** @var string|null Причина ошибки. Возможные значения:
  * `required` - отстутствует поле в запросе
  * `invalid` - недопустимое значение в поле запроса
  * `is_empty` — пустое значение
  * `wrong_size` — значение имеет неправильный размер
  * `is_too_short` — значение имеет слишком маленький размер
  * `is_too_long` — значение имеет слишком большой размер
  * `currency_code_is_invalid` — валюта заработной платы введена некорректно
  * `chosen_area_is_not_a_leaf_or_not_exist` — местоположение вакансии введено неверно (например, передан несуществующий ID) или не является конечным регионом (город, населенный пункт)
  * `email_in_description` — в описании вакансии содержится email
  * `fly_in_fly_out_pay_for_performance` — это вакансия с оплатой за контакты в откликах — для них доступен только вахтовый метод
  * `fly_in_fly_out_incompatible_employment_form` — длительность вахты указывается только для вахтового метода
  * `anonymous_vacancy_contains_address` — в анонимной вакансии содержится адрес работодателя
  * `anonymous_vacancy_has_real_company_name` — в названии вакансии содержится название компании работодателя
  * `only_for_anonymous_type` — действие доступно только для анонимных вакансий
  * `address_is_disabled` — адрес недоступен
  * `vacancy_type_employer_billing_type_mismatch` — тип вакансии не совместим с текущим биллинг-типом
  * `only_for_direct_type` — действие доступно только для прямых вакансий
  * `address_is_empty_with_checked_show_metro_flag` — введен пустой адрес, но указана опция показывать метро
  * `address_has_no_metro_but_checked_show_metro_flag` — по введенному адресу не доступно метро, но указана опция показывать метро
  * `default_vacancy_branded_template_is_invalid_or_not_enough_purchased_services` — в запросе указан шаблон, который отсутствует в списке доступных шаблонов (этот список можно получить [запросом](#tag/Informaciya-o-rabotodatele/operation/get-vacancy-branded-templates-list)). Также шаблон может отсутствовать в списке доступных шаблонов, если не оплачена услуга использования [брендированного шаблона вакансии](https://hh.ru/price/branding)
  * `department_code_prohibited_in_anonymous_vacancy` — нельзя указать код подразделения для анонимной вакансии
  * `branded_template_prohibited_in_anonymous_vacancy` — использование брендированного шаблона невозможно для анонимной вакансии
  * `value_conflict_with_business_rules` — публикация вакансии с указанным `billing_type` запрещена
  * `can_not_accept_kids` — вакансия недоступна несовершеннолетним
  * `can_not_edit_vacancy_after_moderation` — нельзя изменить название вакансии после модерации
  * `employment_form_uncompatible_with_internship` — тип занятости несовместим для типа занятости вахта и стажировка
  * `employment_form_uncompatible_with_work_format` — тип занятости несовместима с указанным форматом работы
  * `properties_existence` — переданные properties не существуют
 */
    public ?string $reason = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Название поля с ошибкой */
    public ?string $value = null;
}
