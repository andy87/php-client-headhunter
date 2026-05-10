<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\Suggestions\Professional;

use and_y87\ClientsHh\Generated\Prompt\GetProfessionalRolesSuggestsPrompt as BaseGetProfessionalRolesSuggestsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /suggests/professional_roles.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-professional-roles-suggests
 *
 * @property string $text Текст для поиска профессиональной роли. Искомый текст должен быть длиной два или более символа и не более 3 000 символов
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetRolesSuggestsPrompt extends BaseGetProfessionalRolesSuggestsPrompt
{
}
