<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\EmployerManagers\Employer;

use Andy87\ClientsHh\Generated\Prompt\EditEmployerManagerPrompt as BaseEditEmployerManagerPrompt;

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
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null $additional_phone Дополнительный телефон менеджера
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions>|null $permissions Список прав, которые можно дать данному типу менеджера
 * @property \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null $phone Основной телефон менеджера
 * @property string|null $position Body field position
 */
class EditManagerPrompt extends BaseEditEmployerManagerPrompt
{
}
