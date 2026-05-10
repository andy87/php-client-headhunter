<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetEducationalInstitutionsDictionaryPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetFacultiesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetLocalesForResumePrompt;
use Andy87\ClientsHh\Generated\Prompt\GetSkillsPrompt;
use Andy87\ClientsHh\Generated\Response\GetEducationalInstitutionsDictionaryResponse;
use Andy87\ClientsHh\Generated\Response\GetFacultiesResponse;
use Andy87\ClientsHh\Generated\Response\GetLocalesForResumeResponse;
use Andy87\ClientsHh\Generated\Response\GetSkillsResponse;

/**
 * Provider раздела HeadHunter API "Справочники".
 * @property-read Dictionaries\EducationalProvider $educational
 * @property-read Dictionaries\FacultiesProvider $faculties
 * @property-read Dictionaries\LocalesProvider $locales
 * @property-read Dictionaries\SkillsProvider $skills
 *
 */
class DictionariesProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'educational' => Dictionaries\EducationalProvider::class,
        'faculties' => Dictionaries\FacultiesProvider::class,
        'locales' => Dictionaries\LocalesProvider::class,
        'skills' => Dictionaries\SkillsProvider::class,
    ];

    /**
     * Основная информация об учебных заведениях
     *
     * OperationId: get-educational-institutions-dictionary.
     * HTTP: GET /educational_institutions.
     *
     * @param GetEducationalInstitutionsDictionaryPrompt $prompt DTO запроса.
     *
     * @return GetEducationalInstitutionsDictionaryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEducationalInstitutionsDictionary(GetEducationalInstitutionsDictionaryPrompt $prompt): GetEducationalInstitutionsDictionaryResponse
    {
        /** @var Dictionaries\EducationalProvider $group */
        $group = $this->operationGroup('educational');

        return $group->getInstitutionsDictionary($prompt);
    }

    /**
     * Список факультетов учебного заведения
     *
     * Возвращает список факультетов указанного учебного заведения
     *
     * OperationId: get-faculties.
     * HTTP: GET /educational_institutions/{id}/faculties.
     *
     * @param GetFacultiesPrompt $prompt DTO запроса.
     *
     * @return GetFacultiesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getFaculties(GetFacultiesPrompt $prompt): GetFacultiesResponse
    {
        /** @var Dictionaries\FacultiesProvider $group */
        $group = $this->operationGroup('faculties');

        return $group->get($prompt);
    }

    /**
     * Список доступных локалей для резюме
     *
     * Возвращает справочник возможных локалей резюме. Подколлекция [справочника локалей](#tag/Spravochniki/operation/get-locales-for-resume).
     *
     * Изменив локаль, можно, например, создать резюме на английском языке
     *
     * OperationId: get-locales-for-resume.
     * HTTP: GET /locales/resume.
     *
     * @param GetLocalesForResumePrompt $prompt DTO запроса.
     *
     * @return GetLocalesForResumeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getLocalesForResume(GetLocalesForResumePrompt $prompt): GetLocalesForResumeResponse
    {
        /** @var Dictionaries\LocalesProvider $group */
        $group = $this->operationGroup('locales');

        return $group->getForResume($prompt);
    }

    /**
     * Справочник ключевых навыков
     *
     * Метод возвращает информацию по запрашиваемым ключевым навыкам.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-skills.
     * HTTP: GET /skills.
     *
     * @param GetSkillsPrompt $prompt DTO запроса.
     *
     * @return GetSkillsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSkills(GetSkillsPrompt $prompt): GetSkillsResponse
    {
        /** @var Dictionaries\SkillsProvider $group */
        $group = $this->operationGroup('skills');

        return $group->get($prompt);
    }
}
