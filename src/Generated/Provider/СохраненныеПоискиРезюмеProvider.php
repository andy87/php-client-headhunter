<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\CreateSavedResumeSearchPrompt;
use Andy87\ClientsHh\Generated\Prompt\DeleteSavedResumeSearchPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetSavedResumeSearchPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetSavedResumeSearchesPrompt;
use Andy87\ClientsHh\Generated\Prompt\MoveSavedResumeSearchPrompt;
use Andy87\ClientsHh\Generated\Prompt\UpdateSavedResumeSearchPrompt;
use Andy87\ClientsHh\Generated\Response\CreateSavedResumeSearchResponse;
use Andy87\ClientsHh\Generated\Response\DeleteSavedResumeSearchResponse;
use Andy87\ClientsHh\Generated\Response\GetSavedResumeSearchResponse;
use Andy87\ClientsHh\Generated\Response\GetSavedResumeSearchesResponse;
use Andy87\ClientsHh\Generated\Response\MoveSavedResumeSearchResponse;
use Andy87\ClientsHh\Generated\Response\UpdateSavedResumeSearchResponse;

/**
 * Provider раздела HeadHunter API "Сохраненные поиски резюме".
 * @property-read СохраненныеПоискиРезюме\MoveProvider $move
 * @property-read СохраненныеПоискиРезюме\SavedProvider $saved
 *
 */
class СохраненныеПоискиРезюмеProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'move' => СохраненныеПоискиРезюме\MoveProvider::class,
        'saved' => СохраненныеПоискиРезюме\SavedProvider::class,
    ];

    /**
     * Создание нового сохраненного поиска резюме
     *
     * Некоторые параметры принимают множественные значения: `key=value&key=value`.
     *
     * При указании параметров пагинации (`page`, `per_page`) работает ограничение: глубина возвращаемых результатов не может быть больше 2000. Например, возможен запрос `per_page=10&page=199` (выдача с 1991 по 2000 вакансию), но запрос с `per_page=10&page=200` вернёт ошибку (выдача с 2001 до 2010 вакансию)
     *
     * OperationId: create-saved-resume-search.
     * HTTP: POST /saved_searches/resumes.
     *
     * @param CreateSavedResumeSearchPrompt $prompt DTO запроса.
     *
     * @return CreateSavedResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createSavedResumeSearch(CreateSavedResumeSearchPrompt $prompt): CreateSavedResumeSearchResponse
    {
        /** @var СохраненныеПоискиРезюме\SavedProvider $group */
        $group = $this->operationGroup('saved');

        return $group->createResumeSearch($prompt);
    }

    /**
     * Удаление сохраненного поиска резюме
     *
     * OperationId: delete-saved-resume-search.
     * HTTP: DELETE /saved_searches/resumes/{id}.
     *
     * @param DeleteSavedResumeSearchPrompt $prompt DTO запроса.
     *
     * @return DeleteSavedResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteSavedResumeSearch(DeleteSavedResumeSearchPrompt $prompt): DeleteSavedResumeSearchResponse
    {
        /** @var СохраненныеПоискиРезюме\SavedProvider $group */
        $group = $this->operationGroup('saved');

        return $group->deleteResumeSearch($prompt);
    }

    /**
     * Получение единичного сохраненного поиска резюме
     *
     * Внимание: счетчик `new_items.count` обновляется раз в час. Из-за этого реальное количество новых найденных резюме
     * может расходиться со значением этого счетчика
     *
     * OperationId: get-saved-resume-search.
     * HTTP: GET /saved_searches/resumes/{id}.
     *
     * @param GetSavedResumeSearchPrompt $prompt DTO запроса.
     *
     * @return GetSavedResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSavedResumeSearch(GetSavedResumeSearchPrompt $prompt): GetSavedResumeSearchResponse
    {
        /** @var СохраненныеПоискиРезюме\SavedProvider $group */
        $group = $this->operationGroup('saved');

        return $group->getResumeSearch($prompt);
    }

    /**
     * Список сохраненных поисков резюме
     *
     * OperationId: get-saved-resume-searches.
     * HTTP: GET /saved_searches/resumes.
     *
     * @param GetSavedResumeSearchesPrompt $prompt DTO запроса.
     *
     * @return GetSavedResumeSearchesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSavedResumeSearches(GetSavedResumeSearchesPrompt $prompt): GetSavedResumeSearchesResponse
    {
        /** @var СохраненныеПоискиРезюме\SavedProvider $group */
        $group = $this->operationGroup('saved');

        return $group->getResumeSearches($prompt);
    }

    /**
     * Передача сохраненного поиска резюме другому менеджеру
     *
     * OperationId: move-saved-resume-search.
     * HTTP: PUT /saved_searches/resumes/{saved_search_id}/managers/{manager_id}.
     *
     * @param MoveSavedResumeSearchPrompt $prompt DTO запроса.
     *
     * @return MoveSavedResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function moveSavedResumeSearch(MoveSavedResumeSearchPrompt $prompt): MoveSavedResumeSearchResponse
    {
        /** @var СохраненныеПоискиРезюме\MoveProvider $group */
        $group = $this->operationGroup('move');

        return $group->savedResumeSearch($prompt);
    }

    /**
     * Обновление сохраненного поиска резюме
     *
     * У сохраненного поиска можно изменить имя (`name`) и статус подписки (`subscription`). В одном запросе можно передать только один из параметров
     *
     * OperationId: update-saved-resume-search.
     * HTTP: PUT /saved_searches/resumes/{id}.
     *
     * @param UpdateSavedResumeSearchPrompt $prompt DTO запроса.
     *
     * @return UpdateSavedResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function updateSavedResumeSearch(UpdateSavedResumeSearchPrompt $prompt): UpdateSavedResumeSearchResponse
    {
        /** @var СохраненныеПоискиРезюме\SavedProvider $group */
        $group = $this->operationGroup('saved');

        return $group->updateResumeSearch($prompt);
    }
}
