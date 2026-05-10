<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ИнформацияОРаботодателе;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetTestsDictionaryPrompt;
use Andy87\ClientsHh\Generated\Response\ИнформацияОРаботодателе\Tests\GetDictionaryResponse;

/**
 * Группа методов "tests" раздела HeadHunter API "Информация о работодателе".
 */
class TestsProvider extends BaseHhProvider
{
    /**
     * Справочник тестов работодателя
     *
     * Возвращает список сохраненных тестов работодателя
     *
     * OperationId: get-tests-dictionary.
     * HTTP: GET /employers/{employer_id}/tests.
     *
     * @param GetTestsDictionaryPrompt $prompt DTO запроса.
     *
     * @return GetDictionaryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDictionary(GetTestsDictionaryPrompt $prompt): GetDictionaryResponse
    {
        /** @var GetDictionaryResponse $response */
        $response = $this->request($prompt, GetDictionaryResponse::class);

        return $response;
    }
}
