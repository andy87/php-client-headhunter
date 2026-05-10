<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ОбщиеСправочники;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetLocalesPrompt;
use Andy87\ClientsHh\Generated\Response\ОбщиеСправочники\Locales\GetResponse;

/**
 * Группа методов "locales" раздела HeadHunter API "Общие справочники".
 */
class LocalesProvider extends BaseHhProvider
{
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
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetLocalesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
