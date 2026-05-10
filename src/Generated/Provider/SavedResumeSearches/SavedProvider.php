<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\SavedResumeSearches;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\CreateSavedResumeSearchPrompt;
use and_y87\ClientsHh\Generated\Prompt\DeleteSavedResumeSearchPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetSavedResumeSearchPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetSavedResumeSearchesPrompt;
use and_y87\ClientsHh\Generated\Prompt\UpdateSavedResumeSearchPrompt;
use and_y87\ClientsHh\Generated\Response\SavedResumeSearches\Saved\CreateResumeSearchResponse;
use and_y87\ClientsHh\Generated\Response\SavedResumeSearches\Saved\DeleteResumeSearchResponse;
use and_y87\ClientsHh\Generated\Response\SavedResumeSearches\Saved\GetResumeSearchResponse;
use and_y87\ClientsHh\Generated\Response\SavedResumeSearches\Saved\GetResumeSearchesResponse;
use and_y87\ClientsHh\Generated\Response\SavedResumeSearches\Saved\UpdateResumeSearchResponse;

/**
 * Группа методов "saved" раздела HeadHunter API "Сохраненные поиски резюме".
 */
class SavedProvider extends BaseHhProvider
{
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
     * @return CreateResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createResumeSearch(CreateSavedResumeSearchPrompt $prompt): CreateResumeSearchResponse
    {
        /** @var CreateResumeSearchResponse $response */
        $response = $this->request($prompt, CreateResumeSearchResponse::class);

        return $response;
    }

    /**
     * Удаление сохраненного поиска резюме
     *
     * OperationId: delete-saved-resume-search.
     * HTTP: DELETE /saved_searches/resumes/{id}.
     *
     * @param DeleteSavedResumeSearchPrompt $prompt DTO запроса.
     *
     * @return DeleteResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteResumeSearch(DeleteSavedResumeSearchPrompt $prompt): DeleteResumeSearchResponse
    {
        /** @var DeleteResumeSearchResponse $response */
        $response = $this->request($prompt, DeleteResumeSearchResponse::class);

        return $response;
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
     * @return GetResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getResumeSearch(GetSavedResumeSearchPrompt $prompt): GetResumeSearchResponse
    {
        /** @var GetResumeSearchResponse $response */
        $response = $this->request($prompt, GetResumeSearchResponse::class);

        return $response;
    }

    /**
     * Список сохраненных поисков резюме
     *
     * OperationId: get-saved-resume-searches.
     * HTTP: GET /saved_searches/resumes.
     *
     * @param GetSavedResumeSearchesPrompt $prompt DTO запроса.
     *
     * @return GetResumeSearchesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getResumeSearches(GetSavedResumeSearchesPrompt $prompt): GetResumeSearchesResponse
    {
        /** @var GetResumeSearchesResponse $response */
        $response = $this->request($prompt, GetResumeSearchesResponse::class);

        return $response;
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
     * @return UpdateResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function updateResumeSearch(UpdateSavedResumeSearchPrompt $prompt): UpdateResumeSearchResponse
    {
        /** @var UpdateResumeSearchResponse $response */
        $response = $this->request($prompt, UpdateResumeSearchResponse::class);

        return $response;
    }
}
