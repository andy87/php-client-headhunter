<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAllDistrictsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetAreasFromSpecifiedPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetAreasPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetCountriesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetDictionariesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetIndustriesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetLanguagesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetLocalesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetMetroStationsInCityPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetMetroStationsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetProfessionalRolesDictionaryPrompt;
use Andy87\ClientsHh\Generated\Response\GetAllDistrictsResponse;
use Andy87\ClientsHh\Generated\Response\GetAreasFromSpecifiedResponse;
use Andy87\ClientsHh\Generated\Response\GetAreasResponse;
use Andy87\ClientsHh\Generated\Response\GetCountriesResponse;
use Andy87\ClientsHh\Generated\Response\GetDictionariesResponse;
use Andy87\ClientsHh\Generated\Response\GetIndustriesResponse;
use Andy87\ClientsHh\Generated\Response\GetLanguagesResponse;
use Andy87\ClientsHh\Generated\Response\GetLocalesResponse;
use Andy87\ClientsHh\Generated\Response\GetMetroStationsInCityResponse;
use Andy87\ClientsHh\Generated\Response\GetMetroStationsResponse;
use Andy87\ClientsHh\Generated\Response\GetProfessionalRolesDictionaryResponse;

/**
 * Provider раздела HeadHunter API "Общие справочники".
 * @property-read CommonDictionaries\AllProvider $all
 * @property-read CommonDictionaries\AreasProvider $areas
 * @property-read CommonDictionaries\CountriesProvider $countries
 * @property-read CommonDictionaries\DictionariesProvider $dictionaries
 * @property-read CommonDictionaries\IndustriesProvider $industries
 * @property-read CommonDictionaries\LanguagesProvider $languages
 * @property-read CommonDictionaries\LocalesProvider $locales
 * @property-read CommonDictionaries\MetroProvider $metro
 * @property-read CommonDictionaries\ProfessionalProvider $professional
 *
 */
class CommonDictionariesProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'all' => CommonDictionaries\AllProvider::class,
        'areas' => CommonDictionaries\AreasProvider::class,
        'countries' => CommonDictionaries\CountriesProvider::class,
        'dictionaries' => CommonDictionaries\DictionariesProvider::class,
        'industries' => CommonDictionaries\IndustriesProvider::class,
        'languages' => CommonDictionaries\LanguagesProvider::class,
        'locales' => CommonDictionaries\LocalesProvider::class,
        'metro' => CommonDictionaries\MetroProvider::class,
        'professional' => CommonDictionaries\ProfessionalProvider::class,
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
        /** @var CommonDictionaries\AllProvider $group */
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
        /** @var CommonDictionaries\AreasProvider $group */
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
        /** @var CommonDictionaries\AreasProvider $group */
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
        /** @var CommonDictionaries\CountriesProvider $group */
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
        /** @var CommonDictionaries\DictionariesProvider $group */
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
        /** @var CommonDictionaries\IndustriesProvider $group */
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
        /** @var CommonDictionaries\LanguagesProvider $group */
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
        /** @var CommonDictionaries\LocalesProvider $group */
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
        /** @var CommonDictionaries\MetroProvider $group */
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
        /** @var CommonDictionaries\MetroProvider $group */
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
        /** @var CommonDictionaries\ProfessionalProvider $group */
        $group = $this->operationGroup('professional');

        return $group->getRolesDictionary($prompt);
    }
}
