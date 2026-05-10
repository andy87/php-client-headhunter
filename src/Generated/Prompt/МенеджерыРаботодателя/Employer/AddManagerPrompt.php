<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\МенеджерыРаботодателя\Employer;

use Andy87\ClientsHh\Generated\Prompt\AddEmployerManagerPrompt as BaseAddEmployerManagerPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /employers/{employer_id}/managers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/add-employer-manager
 *
 * @property string $employer_id Идентификатор работодателя. Чтобы получить его, используйте метод [Информация о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null $additional_phone Дополнительный телефон менеджера
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersAreaId $area Body field area
 * @property string $email Адрес электронной почты менеджера
 * @property string $first_name Имя менеджера
 * @property bool $is_main_contact_person Является ли менеджер основным контактным лицом
 * @property string $last_name Фамилия менеджера
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerTypeId $manager_type Body field manager_type
 * @property string|null $middle_name Отчество менеджера
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPermissions>|null $permissions Список [прав менеджера](#tag/Menedzhery-rabotodatelya/operation/get-employer-manager-types)
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone Основной телефон менеджера
 * @property string $position Должность менеджера
 */
class AddManagerPrompt extends BaseAddEmployerManagerPrompt
{
}
