<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\СохраненныеПоискиРезюме;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\MoveSavedResumeSearchPrompt;
use Andy87\ClientsHh\Generated\Response\СохраненныеПоискиРезюме\Move\SavedResumeSearchResponse;

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
