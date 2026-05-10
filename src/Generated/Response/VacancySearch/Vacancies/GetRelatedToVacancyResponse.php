<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancySearch\Vacancies;

use and_y87\ClientsHh\Generated\Response\GetVacanciesRelatedToVacancyResponse as BaseGetVacanciesRelatedToVacancyResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/related_vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancies-related-to-vacancy
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacanciesItem> $items Список вакансий
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesClusterItem>|null $clusters Массив [кластеров поиска](#tag/Poisk-vakansij/Klastery-v-poiske-vakansij)
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesArgumentItem>|null $arguments Массив параметров поиска, переданных в запросе. Возвращается только если в запросе передан параметр `describe_arguments=true`. В массиве выдаются только те параметры, которые влияют на поиск вакансий. Неизвестные параметры игнорируются. Элемент списка с одним значением `argument` может повторяться несколько раз, если параметр имеет несколько значений
 * @property string|null $alternate_url Ссылка на вакансию
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacanciesFixes|null $fixes Response field fixes
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacanciesSuggests|null $suggests Response field suggests
 */
class GetRelatedToVacancyResponse extends BaseGetVacanciesRelatedToVacancyResponse
{
}
