<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Справочники\Skills;

use Andy87\ClientsHh\Generated\Prompt\GetSkillsPrompt as BaseGetSkillsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /skills.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-skills
 *
 * @property string $id Идентификаторы ключевых навыков. Идентификатор конкретного навыка можно узнать по [подсказке](#tag/Podskazki/operation/get-skill-set-suggests). Передать можно не более 50 значений. Например: `?id=2716&id=3019&id=0`. Если был передан идентификатор несуществующего ключевого навыка, для него не вернется никакой информации
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetPrompt extends BaseGetSkillsPrompt
{
}
