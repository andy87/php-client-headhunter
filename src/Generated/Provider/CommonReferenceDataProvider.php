<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetAllDistrictsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetAreasFromSpecifiedPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetAreasPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetCountriesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetDictionariesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetIndustriesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetLanguagesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetLocalesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetMetroStationsInCityPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetMetroStationsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetProfessionalRolesDictionaryPrompt;
use and_y87\ClientsHh\Generated\Response\GetAllDistrictsResponse;
use and_y87\ClientsHh\Generated\Response\GetAreasFromSpecifiedResponse;
use and_y87\ClientsHh\Generated\Response\GetAreasResponse;
use and_y87\ClientsHh\Generated\Response\GetCountriesResponse;
use and_y87\ClientsHh\Generated\Response\GetDictionariesResponse;
use and_y87\ClientsHh\Generated\Response\GetIndustriesResponse;
use and_y87\ClientsHh\Generated\Response\GetLanguagesResponse;
use and_y87\ClientsHh\Generated\Response\GetLocalesResponse;
use and_y87\ClientsHh\Generated\Response\GetMetroStationsInCityResponse;
use and_y87\ClientsHh\Generated\Response\GetMetroStationsResponse;
use and_y87\ClientsHh\Generated\Response\GetProfessionalRolesDictionaryResponse;

/**
 * Provider раздела HeadHunter API "Общие справочники".
 * @property-read CommonReferenceData\AllProvider $all
 * @property-read CommonReferenceData\AreasProvider $areas
 * @property-read CommonReferenceData\CountriesProvider $countries
 * @property-read CommonReferenceData\DictionariesProvider $dictionaries
 * @property-read CommonReferenceData\IndustriesProvider $industries
 * @property-read CommonReferenceData\LanguagesProvider $languages
 * @property-read CommonReferenceData\LocalesProvider $locales
 * @property-read CommonReferenceData\MetroProvider $metro
 * @property-read CommonReferenceData\ProfessionalProvider $professional
 *
 */
class CommonReferenceDataProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'all' => CommonReferenceData\AllProvider::class,
        'areas' => CommonReferenceData\AreasProvider::class,
        'countries' => CommonReferenceData\CountriesProvider::class,
        'dictionaries' => CommonReferenceData\DictionariesProvider::class,
        'industries' => CommonReferenceData\IndustriesProvider::class,
        'languages' => CommonReferenceData\LanguagesProvider::class,
        'locales' => CommonReferenceData\LocalesProvider::class,
        'metro' => CommonReferenceData\MetroProvider::class,
        'professional' => CommonReferenceData\ProfessionalProvider::class,
    ];

    /**
     * Список районов во всех городах
     *
     * OperationId: get-all-districts.
     * HTTP: GET /districts.
     *
     * @param GetAllDistrictsPrompt $prompt DTO запроса.
     *
     * @return GetAllDistrictsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAllDistricts(GetAllDistrictsPrompt $prompt): GetAllDistrictsResponse
    {
        /** @var CommonReferenceData\AllProvider $group */
        $group = $this->operationGroup('all');

        return $group->getDistricts($prompt);
    }

    /**
     * Дерево всех регионов
     *
     * Возвращает древовидный список всех регионов.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-areas.
     * HTTP: GET /areas.
     *
     * @param GetAreasPrompt $prompt DTO запроса.
     *
     * @return GetAreasResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAreas(GetAreasPrompt $prompt): GetAreasResponse
    {
        /** @var CommonReferenceData\AreasProvider $group */
        $group = $this->operationGroup('areas');

        return $group->get($prompt);
    }

    /**
     * Справочник регионов, начиная с указанного
     *
     * Возвращает древовидный список регионов, начиная с указанного.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-areas-from-specified.
     * HTTP: GET /areas/{area_id}.
     *
     * @param GetAreasFromSpecifiedPrompt $prompt DTO запроса.
     *
     * @return GetAreasFromSpecifiedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAreasFromSpecified(GetAreasFromSpecifiedPrompt $prompt): GetAreasFromSpecifiedResponse
    {
        /** @var CommonReferenceData\AreasProvider $group */
        $group = $this->operationGroup('areas');

        return $group->getFromSpecified($prompt);
    }

    /**
     * Справочник стран
     *
     * Возвращает подмножество регионов, являющихся странами
     *
     * OperationId: get-countries.
     * HTTP: GET /areas/countries.
     *
     * @param GetCountriesPrompt $prompt DTO запроса.
     *
     * @return GetCountriesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCountries(GetCountriesPrompt $prompt): GetCountriesResponse
    {
        /** @var CommonReferenceData\CountriesProvider $group */
        $group = $this->operationGroup('countries');

        return $group->get($prompt);
    }

    /**
     * Справочники полей
     *
     * Справочники полей и сущностей, используемых в API. Значения в справочниках могут поменяться в любой момент
     *
     * OperationId: get-dictionaries.
     * HTTP: GET /dictionaries.
     *
     * @param GetDictionariesPrompt $prompt DTO запроса.
     *
     * @return GetDictionariesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDictionaries(GetDictionariesPrompt $prompt): GetDictionariesResponse
    {
        /** @var CommonReferenceData\DictionariesProvider $group */
        $group = $this->operationGroup('dictionaries');

        return $group->get($prompt);
    }

    /**
     * Отрасли компаний
     *
     * Возвращает двухуровневый справочник всех отраслей
     *
     * OperationId: get-industries.
     * HTTP: GET /industries.
     *
     * @param GetIndustriesPrompt $prompt DTO запроса.
     *
     * @return GetIndustriesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getIndustries(GetIndustriesPrompt $prompt): GetIndustriesResponse
    {
        /** @var CommonReferenceData\IndustriesProvider $group */
        $group = $this->operationGroup('industries');

        return $group->get($prompt);
    }

    /**
     * Список всех языков
     *
     * OperationId: get-languages.
     * HTTP: GET /languages.
     *
     * @param GetLanguagesPrompt $prompt DTO запроса.
     *
     * @return GetLanguagesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getLanguages(GetLanguagesPrompt $prompt): GetLanguagesResponse
    {
        /** @var CommonReferenceData\LanguagesProvider $group */
        $group = $this->operationGroup('languages');

        return $group->get($prompt);
    }

    /**
     * Список доступных локалей
     *
     * Возвращает список возможных значений (доступных локалей) в поле `id`. Список локалей будет зависеть от указанного сайта (параметр `host`). В любом запросе к API можно указывать параметр `?locale=` для передачи значения локали (языка)
     *
     * OperationId: get-locales.
     * HTTP: GET /locales.
     *
     * @param GetLocalesPrompt $prompt DTO запроса.
     *
     * @return GetLocalesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getLocales(GetLocalesPrompt $prompt): GetLocalesResponse
    {
        /** @var CommonReferenceData\LocalesProvider $group */
        $group = $this->operationGroup('locales');

        return $group->get($prompt);
    }

    /**
     * Список станций метро во всех городах
     *
     * OperationId: get-metro-stations.
     * HTTP: GET /metro.
     *
     * @param GetMetroStationsPrompt $prompt DTO запроса.
     *
     * @return GetMetroStationsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getMetroStations(GetMetroStationsPrompt $prompt): GetMetroStationsResponse
    {
        /** @var CommonReferenceData\MetroProvider $group */
        $group = $this->operationGroup('metro');

        return $group->getStations($prompt);
    }

    /**
     * Список станций метро в указанном городе
     *
     * OperationId: get-metro-stations-in-city.
     * HTTP: GET /metro/{city_id}.
     *
     * @param GetMetroStationsInCityPrompt $prompt DTO запроса.
     *
     * @return GetMetroStationsInCityResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getMetroStationsInCity(GetMetroStationsInCityPrompt $prompt): GetMetroStationsInCityResponse
    {
        /** @var CommonReferenceData\MetroProvider $group */
        $group = $this->operationGroup('metro');

        return $group->getStationsInCity($prompt);
    }

    /**
     * Справочник профессиональных ролей
     *
     * Возвращает профессиональные роли, их категории и другую информацию о профессиональных ролях
     *
     * OperationId: get-professional-roles-dictionary.
     * HTTP: GET /professional_roles.
     *
     * @param GetProfessionalRolesDictionaryPrompt $prompt DTO запроса.
     *
     * @return GetProfessionalRolesDictionaryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getProfessionalRolesDictionary(GetProfessionalRolesDictionaryPrompt $prompt): GetProfessionalRolesDictionaryResponse
    {
        /** @var CommonReferenceData\ProfessionalProvider $group */
        $group = $this->operationGroup('professional');

        return $group->getRolesDictionary($prompt);
    }
}
