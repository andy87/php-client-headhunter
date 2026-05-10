<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\VacancyManagement;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\PublishVacancyPrompt;
use Andy87\ClientsHh\Generated\Response\VacancyManagement\Publish\VacancyResponse;

/**
 * Группа методов "publish" раздела HeadHunter API "Управление вакансиями".
 */
class PublishProvider extends BaseHhProvider
{
    /**
     * Публикация вакансии
     *
     * Создает новую вакансию с полями, передаваемыми в теле запроса.
     *
     * В соответствии с [законом РФ № 1032-1 от 19.04.1991 в ред. от 02.07.2013 г.](https://hh.ru/article/13967) запрещено размещать информацию, ограничивающую права или устанавливающую преимущества для соискателей по полу, возрасту, семейному положению и другим обстоятельствам, не связанным с деловыми качествами работников.
     *
     * Примечания:
     *
     * * При успешной публикации будут списаны соответствующие услуги.
     * * Все вакансии проходят ручную модерацию.
     * * В течение нескольких минут после публикации вакансия станет доступна в поиске.
     *
     * Полезные ссылки:
     *
     * * [Правила размещения вакансий](https://hh.ru/article/341)
     * * [Как составить хорошее описание вакансии](https://hh.ru/article/24517)
     *
     * OperationId: publish-vacancy.
     * HTTP: POST /vacancies.
     *
     * @param PublishVacancyPrompt $prompt DTO запроса.
     *
     * @return VacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancy(PublishVacancyPrompt $prompt): VacancyResponse
    {
        /** @var VacancyResponse $response */
        $response = $this->request($prompt, VacancyResponse::class);

        return $response;
    }
}
