<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\Suggestions\Skill;

use and_y87\ClientsHh\Generated\Prompt\GetSkillSetSuggestsPrompt as BaseGetSkillSetSuggestsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /suggests/skill_set.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-skill-set-suggests
 *
 * @property string $text Текст для поиска ключевых навыков. Искомый текст должен быть длиной два или более символа и не более 3 000 символов
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetSetSuggestsPrompt extends BaseGetSkillSetSuggestsPrompt
{
}
