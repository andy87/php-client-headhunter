<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerManagers\Employer;

use and_y87\ClientsHh\Generated\Prompt\EditEmployerManagerPrompt as BaseEditEmployerManagerPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /employers/{employer_id}/managers/{manager_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/edit-employer-manager
 *
 * @property string $employer_id Идентификатор работодателя, который можно узнать [в информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string $manager_id Идентификатор менеджера. Можно узнать из списка [менеджеров](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null $additional_phone Дополнительный телефон менеджера
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions>|null $permissions Список прав, которые можно дать данному типу менеджера
 * @property \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null $phone Основной телефон менеджера
 * @property string|null $position Body field position
 */
class EditManagerPrompt extends BaseEditEmployerManagerPrompt
{
}
