<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerManagers\Employer;

use and_y87\ClientsHh\Generated\Prompt\DeleteEmployerManagerPrompt as BaseDeleteEmployerManagerPrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /employers/{employer_id}/managers/{manager_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/delete-employer-manager
 *
 * @property string $employer_id Идентификатор работодателя, который можно узнать в [информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string $manager_id Идентификатор менеджера
 * @property string $successor_id Идентификатор менеджера, которому передаются данные, связанные с удаляемым менеджером, в частности: вакансии, отклики, папки отобранных резюме, комментарии к соискателю, автопоиски и прочее
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class DeleteManagerPrompt extends BaseDeleteEmployerManagerPrompt
{
}
