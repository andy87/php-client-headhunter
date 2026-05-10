<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ОткликиПриглашенияРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationsStatisticsEmployerPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationsStatisticsManagerPrompt;
use Andy87\ClientsHh\Generated\Prompt\PostNegotiationsTopicsReadPrompt;
use Andy87\ClientsHh\Generated\Prompt\PutNegotiationsCollectionToNextStatePrompt;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiations\GetStatisticsEmployerResponse;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiations\GetStatisticsManagerResponse;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiations\PostTopicsReadResponse;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiations\PutCollectionToNextStateResponse;

/**
 * Группа методов "negotiations" раздела HeadHunter API "Отклики/приглашения работодателя".
 */
class NegotiationsProvider extends BaseHhProvider
{
    /**
     * Статистика откликов для компании
     *
     * Запрос выводит статистику по работе с откликами для вакансий компании за период (30 дней).
     *
     * Дополнительно рассчитывается [индекс вежливости](https://hh.ru/article/23734) компании по всем вакансиям
     *
     * OperationId: get-negotiations-statistics-employer.
     * HTTP: GET /employers/{employer_id}/negotiations_statistics.
     *
     * @param GetNegotiationsStatisticsEmployerPrompt $prompt DTO запроса.
     *
     * @return GetStatisticsEmployerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStatisticsEmployer(GetNegotiationsStatisticsEmployerPrompt $prompt): GetStatisticsEmployerResponse
    {
        /** @var GetStatisticsEmployerResponse $response */
        $response = $this->request($prompt, GetStatisticsEmployerResponse::class);

        return $response;
    }

    /**
     * Статистика откликов для менеджера
     *
     * Запрос выводит статистику по работе с откликами для вакансий менеджера за период (30 дней). Статистика менеджера доступна самому менеджеру, а также менеджерам с [типом](#tag/Menedzhery-rabotodatelya/operation/get-employer-manager-types) `main_contact_person`.
     *
     * Дополнительно рассчитывается [индекс вежливости](https://hh.ru/article/23734) менеджера по всем вакансиям
     *
     * OperationId: get-negotiations-statistics-manager.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}/negotiations_statistics.
     *
     * @param GetNegotiationsStatisticsManagerPrompt $prompt DTO запроса.
     *
     * @return GetStatisticsManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStatisticsManager(GetNegotiationsStatisticsManagerPrompt $prompt): GetStatisticsManagerResponse
    {
        /** @var GetStatisticsManagerResponse $response */
        $response = $this->request($prompt, GetStatisticsManagerResponse::class);

        return $response;
    }

    /**
     * Отметить отклики прочитанными
     *
     * OperationId: post-negotiations-topics-read.
     * HTTP: POST /negotiations/read.
     *
     * @param PostNegotiationsTopicsReadPrompt $prompt DTO запроса.
     *
     * @return PostTopicsReadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postTopicsRead(PostNegotiationsTopicsReadPrompt $prompt): PostTopicsReadResponse
    {
        /** @var PostTopicsReadResponse $response */
        $response = $this->request($prompt, PostTopicsReadResponse::class);

        return $response;
    }

    /**
     * Действия по откликам/приглашениям
     *
     * Работодатель может изменять состояние (state) отклика для соискателя, чтобы повысить качество обратной связи и упростить работу со статистикой откликов.
     *
     * Если работодатель, используя данный метод, отправляет соискателю сообщение об изменении состояния отклика/приглашения (поле `message` в теле запроса), это приведет также к изменению соискательского состояния отклика/приглашения.
     *
     * Обязательность аргументов в теле запроса отличается для разных откликов/приглашений. Проверить, является ли аргумент обязательным можно в поле `actions.arguments`, которое возвращается для каждого отклика в [списке откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-collection-negotiations-list)
     *
     * OperationId: put-negotiations-collection-to-next-state.
     * HTTP: PUT /negotiations/{id}.
     *
     * @param PutNegotiationsCollectionToNextStatePrompt $prompt DTO запроса.
     *
     * @return PutCollectionToNextStateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putCollectionToNextState(PutNegotiationsCollectionToNextStatePrompt $prompt): PutCollectionToNextStateResponse
    {
        /** @var PutCollectionToNextStateResponse $response */
        $response = $this->request($prompt, PutCollectionToNextStateResponse::class);

        return $response;
    }
}
