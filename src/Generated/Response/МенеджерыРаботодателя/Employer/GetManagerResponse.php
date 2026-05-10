<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\МенеджерыРаботодателя\Employer;

use Andy87\ClientsHh\Generated\Response\GetEmployerManagerResponse as BaseGetEmployerManagerResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-manager
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null $additional_phone Дополнительный телефон менеджера
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersArea|null $area Response field area
 * @property string|null $creation_time Дата и время регистрации менеджера
 * @property string $email Адрес электронной почты менеджера
 * @property string $first_name Имя менеджера
 * @property string|null $full_name Полное имя менеджера
 * @property string $id Идентификатор менеджера
 * @property bool $is_main_contact_person Является ли менеджер основным контактным лицом
 * @property string $last_name Фамилия менеджера
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerType|null $manager_type Response field manager_type
 * @property string|null $middle_name Отчество менеджера
 * @property string|null $name Полное имя менеджера
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions> $permissions Список [прав менеджера](#tag/Menedzhery-rabotodatelya/operation/get-employer-manager-types)
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone Основной телефон менеджера
 * @property string $position Должность менеджера
 * @property string|null $special_note_1 Первый спецпризнак менеджера
 * @property string|null $special_note_2 Второй спецпризнак менеджера
 * @property float|null $vacancies_count Количество опубликованных (активных) вакансий у данного менеджера. `null` — если у пользователя нет прав на просмотр вакансий этого менеджера
 */
class GetManagerResponse extends BaseGetEmployerManagerResponse
{
}
