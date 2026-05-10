<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ResumeReferenceData\Educational;

use Andy87\ClientsHh\Generated\Prompt\GetEducationalInstitutionsDictionaryPrompt as BaseGetEducationalInstitutionsDictionaryPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /educational_institutions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-educational-institutions-dictionary
 *
 * @property string $id Идентификаторы учебных заведений. Идентификатор конкретного заведения можно узнать в [подсказке](#tag/Podskazki/operation/get-educational-institutions-suggests). Передать можно не более 50 значений. Например: `?id=39196&id=45470&id=0`. Если был передан идентификатор несуществующего заведения, для него не вернется никакой информации
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetInstitutionsDictionaryPrompt extends BaseGetEducationalInstitutionsDictionaryPrompt
{
}
