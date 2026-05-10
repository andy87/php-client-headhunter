<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\SavedResumeSearches;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\MoveSavedResumeSearchPrompt;
use and_y87\ClientsHh\Generated\Response\SavedResumeSearches\Move\SavedResumeSearchResponse;

/**
 * Группа методов "move" раздела HeadHunter API "Сохраненные поиски резюме".
 */
class MoveProvider extends BaseHhProvider
{
    /**
     * Передача сохраненного поиска резюме другому менеджеру
     *
     * OperationId: move-saved-resume-search.
     * HTTP: PUT /saved_searches/resumes/{saved_search_id}/managers/{manager_id}.
     *
     * @param MoveSavedResumeSearchPrompt $prompt DTO запроса.
     *
     * @return SavedResumeSearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function savedResumeSearch(MoveSavedResumeSearchPrompt $prompt): SavedResumeSearchResponse
    {
        /** @var SavedResumeSearchResponse $response */
        $response = $this->request($prompt, SavedResumeSearchResponse::class);

        return $response;
    }
}
