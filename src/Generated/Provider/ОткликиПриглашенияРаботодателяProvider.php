<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\ChangeNegotiationActionPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetCollectionNegotiationsListPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetMailTemplatesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationMessageTemplatesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationTestResultsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationsStatisticsEmployerPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationsStatisticsManagerPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetPrefNegotiationsOrderPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetResumeNegotiationsHistoryPrompt;
use Andy87\ClientsHh\Generated\Prompt\InviteApplicantToVacancyPrompt;
use Andy87\ClientsHh\Generated\Prompt\PostNegotiationsTopicsReadPrompt;
use Andy87\ClientsHh\Generated\Prompt\PutMailTemplatesItemPrompt;
use Andy87\ClientsHh\Generated\Prompt\PutNegotiationsCollectionToNextStatePrompt;
use Andy87\ClientsHh\Generated\Prompt\PutPrefNegotiationsOrderPrompt;
use Andy87\ClientsHh\Generated\Response\ChangeNegotiationActionResponse;
use Andy87\ClientsHh\Generated\Response\GetCollectionNegotiationsListResponse;
use Andy87\ClientsHh\Generated\Response\GetMailTemplatesResponse;
use Andy87\ClientsHh\Generated\Response\GetNegotiationMessageTemplatesResponse;
use Andy87\ClientsHh\Generated\Response\GetNegotiationTestResultsResponse;
use Andy87\ClientsHh\Generated\Response\GetNegotiationsStatisticsEmployerResponse;
use Andy87\ClientsHh\Generated\Response\GetNegotiationsStatisticsManagerResponse;
use Andy87\ClientsHh\Generated\Response\GetPrefNegotiationsOrderResponse;
use Andy87\ClientsHh\Generated\Response\GetResumeNegotiationsHistoryResponse;
use Andy87\ClientsHh\Generated\Response\InviteApplicantToVacancyResponse;
use Andy87\ClientsHh\Generated\Response\PostNegotiationsTopicsReadResponse;
use Andy87\ClientsHh\Generated\Response\PutMailTemplatesItemResponse;
use Andy87\ClientsHh\Generated\Response\PutNegotiationsCollectionToNextStateResponse;
use Andy87\ClientsHh\Generated\Response\PutPrefNegotiationsOrderResponse;

/**
 * Provider раздела HeadHunter API "Отклики/приглашения работодателя".
 * @property-read ОткликиПриглашенияРаботодателя\CollectionProvider $collection
 * @property-read ОткликиПриглашенияРаботодателя\GetProvider $get
 * @property-read ОткликиПриглашенияРаботодателя\InviteProvider $invite
 * @property-read ОткликиПриглашенияРаботодателя\MailProvider $mail
 * @property-read ОткликиПриглашенияРаботодателя\NegotiationProvider $negotiation
 * @property-read ОткликиПриглашенияРаботодателя\NegotiationsProvider $negotiations
 * @property-read ОткликиПриглашенияРаботодателя\PrefProvider $pref
 *
 */
class ОткликиПриглашенияРаботодателяProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'collection' => ОткликиПриглашенияРаботодателя\CollectionProvider::class,
        'get' => ОткликиПриглашенияРаботодателя\GetProvider::class,
        'invite' => ОткликиПриглашенияРаботодателя\InviteProvider::class,
        'mail' => ОткликиПриглашенияРаботодателя\MailProvider::class,
        'negotiation' => ОткликиПриглашенияРаботодателя\NegotiationProvider::class,
        'negotiations' => ОткликиПриглашенияРаботодателя\NegotiationsProvider::class,
        'pref' => ОткликиПриглашенияРаботодателя\PrefProvider::class,
    ];

    /**
     * Действия по отклику/приглашению коллекции
     *
     * Запрос изменяет состояние работодательского (`employer_state`) или соискательского (`state`) состояния отклика/приглашения.
     *
     * #### Смена работодательского состояния отклика/приглашения
     *
     * > Доступные действия для каждого отклика/приглашения перечислены в массиве `employer_states` [списка откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations).
     *
     * Чтобы изменить состояние отклика, выполните запрос из параметра `actions[].url` [списка откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-collection-negotiations-list) для выбранного действия над откликом.
     * В запросе необходимо передать аргументы массива `actions[].arguments` в формате `application/x-www-form-urlencoded`.
     *
     * Примеры действий:
     *
     * * отложить отклик;
     * * пригласить соискателя на интервью в ответ на отклик;
     * * отказать соискателю.
     *
     * #### Смена соискательского состояния отклика/приглашения
     *
     * Изменение соискательского состояния отклика/приглашения влияет на [статистику по работе с откликами](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations-statistics-employer).
     *
     * Условие смены соискательского состояния отклика/приглашения — отправка сообщения соискателю любым из способов:
     *
     * - Совершить действие с откликом/приглашением, используя метод `/negotiations/{collection_name}/{nid}`, с сопроводительным сообщением.
     * - [Отправить сообщение](#tag/Otklikipriglasheniya-rabotodatelya/operation/send-negotiation-message) в отклике. Статус изменится, если перед отправкой использовался метод изменения работодательского статуса без сопроводительного сообщения.
     *
     * Соискательский статус в обоих случаях изменится или на приглашение (`invitation`), или на отказ (`discard`)
     *
     * OperationId: change-negotiation-action.
     * HTTP: PUT /negotiations/{collection_name}/{nid}.
     *
     * @param ChangeNegotiationActionPrompt $prompt DTO запроса.
     *
     * @return ChangeNegotiationActionResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function changeNegotiationAction(ChangeNegotiationActionPrompt $prompt): ChangeNegotiationActionResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\NegotiationProvider $group */
        $group = $this->operationGroup('negotiation');

        return $group->changeAction($prompt);
    }

    /**
     * Список откликов/приглашений коллекции
     *
     * Возвращает список откликов/приглашений для заданной коллекции. URL для запроса необходимо брать из поля `collections[].url` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations).
     *
     * > Вместо `response` необходимо указывать параметр `{collection_name}` — название коллекции. Возможные значения указаны в поле `collections[].id` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations).
     *
     * В ответе будет только основная информация о резюме. Чтобы получить дополнительную информацию, например, контактный телефон, необходимо [запросить полное резюме](#tag/Upravlenie-vakansiyami/operation/get-vacancy).
     *
     * Некоторые параметры запроса могут принимать множественные значения: `key=value&key=value`. Если параметр может принимать несколько значений, об этом явно указано в его описании. Неизвестные параметры и параметры с ошибкой в названии игнорируются.
     *
     * > Коллекция `phone_calls` принимает только параметры `vacancy_id`, `order_by`, `page` и `per_page`
     *
     * OperationId: get-collection-negotiations-list.
     * HTTP: GET /negotiations/response.
     *
     * @param GetCollectionNegotiationsListPrompt $prompt DTO запроса.
     *
     * @return GetCollectionNegotiationsListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCollectionNegotiationsList(GetCollectionNegotiationsListPrompt $prompt): GetCollectionNegotiationsListResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\CollectionProvider $group */
        $group = $this->operationGroup('collection');

        return $group->getNegotiationsList($prompt);
    }

    /**
     * Список доступных шаблонов ответов соискателю
     *
     * Возвращает список возможных значений шаблонов ответов для [переписки](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-messages)
     *
     * OperationId: get-mail-templates.
     * HTTP: GET /employers/{employer_id}/mail_templates.
     *
     * @param GetMailTemplatesPrompt $prompt DTO запроса.
     *
     * @return GetMailTemplatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getMailTemplates(GetMailTemplatesPrompt $prompt): GetMailTemplatesResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\MailProvider $group */
        $group = $this->operationGroup('mail');

        return $group->getTemplates($prompt);
    }

    /**
     * Список шаблонов ответов для отклика/приглашения
     *
     * Метод требует наличия [платного доступа для работодателя](#operation/get-payable-api-method-access).
     *
     * Возвращает список шаблонов ответов для отклика/приглашения или резюме. Может использоваться в отправляемых соискателю приглашениях на вакансию или [действиях по откликам/приглашениям](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state).
     *
     * > Количество доступных шаблонов будет зависеть от конкретного отклика/приглашения или вакансии и их статусов.
     *
     * Рекомендуется использовать URL из поля `templates.url` в [списке откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations). Примеры:
     *
     * ```
     * GET /message_templates/{template}?topic_id={topic_id}
     * GET /message_templates/{template}?vacancy_id={vacancy_id}&resume_id={resume_id}
     * ```
     *
     * OperationId: get-negotiation-message-templates.
     * HTTP: GET /message_templates/{template}.
     *
     * @param GetNegotiationMessageTemplatesPrompt $prompt DTO запроса.
     *
     * @return GetNegotiationMessageTemplatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getNegotiationMessageTemplates(GetNegotiationMessageTemplatesPrompt $prompt): GetNegotiationMessageTemplatesResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\NegotiationProvider $group */
        $group = $this->operationGroup('negotiation');

        return $group->getMessageTemplates($prompt);
    }

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
     * @return GetNegotiationsStatisticsEmployerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getNegotiationsStatisticsEmployer(GetNegotiationsStatisticsEmployerPrompt $prompt): GetNegotiationsStatisticsEmployerResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\NegotiationsProvider $group */
        $group = $this->operationGroup('negotiations');

        return $group->getStatisticsEmployer($prompt);
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
     * @return GetNegotiationsStatisticsManagerResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getNegotiationsStatisticsManager(GetNegotiationsStatisticsManagerPrompt $prompt): GetNegotiationsStatisticsManagerResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\NegotiationsProvider $group */
        $group = $this->operationGroup('negotiations');

        return $group->getStatisticsManager($prompt);
    }

    /**
     * Получить результаты тестов, прикрепленных к вакансии
     *
     * Запрос возвращает информацию о пройденных тестах откликнувшегося соискателя
     *
     * OperationId: get-negotiation-test-results.
     * HTTP: GET /negotiations/{nid}/test/solution.
     *
     * @param GetNegotiationTestResultsPrompt $prompt DTO запроса.
     *
     * @return GetNegotiationTestResultsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getNegotiationTestResults(GetNegotiationTestResultsPrompt $prompt): GetNegotiationTestResultsResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\NegotiationProvider $group */
        $group = $this->operationGroup('negotiation');

        return $group->getTestResults($prompt);
    }

    /**
     * Просмотр предпочитаемой сортировки откликов
     *
     * OperationId: get-pref-negotiations-order.
     * HTTP: GET /vacancies/{id}/preferred_negotiations_order.
     *
     * @param GetPrefNegotiationsOrderPrompt $prompt DTO запроса.
     *
     * @return GetPrefNegotiationsOrderResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPrefNegotiationsOrder(GetPrefNegotiationsOrderPrompt $prompt): GetPrefNegotiationsOrderResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\PrefProvider $group */
        $group = $this->operationGroup('pref');

        return $group->getNegotiationsOrder($prompt);
    }

    /**
     * История откликов/приглашений по резюме
     *
     * Возвращает последние действия с указанным резюме, ограниченные 30-ю вакансиями данного работодателя, и 10-ю изменениями состояний откликов/приглашений по каждой из этих вакансий.
     *
     * Метод требует наличия [платного доступа для работодателя](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access)
     *
     * OperationId: get-resume-negotiations-history.
     * HTTP: GET /resumes/{resume_id}/negotiations_history.
     *
     * @param GetResumeNegotiationsHistoryPrompt $prompt DTO запроса.
     *
     * @return GetResumeNegotiationsHistoryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getResumeNegotiationsHistory(GetResumeNegotiationsHistoryPrompt $prompt): GetResumeNegotiationsHistoryResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\GetProvider $group */
        $group = $this->operationGroup('get');

        return $group->resumeNegotiationsHistory($prompt);
    }

    /**
     * Пригласить соискателя на вакансию
     *
     * Запрос формирует приглашение на вакансию для соискателя по инициативе работодателя.
     *
     * > Вместо `phone_interview` необходимо сформировать запрос из параметра `negotiations_actions[].url` [списка подходящих вакансий к резюме](#tag/Upravlenie-vakansiyami/operation/get-active-vacancy-list), передав аргументы из массива `negotiations_actions[].arguments`.
     *
     * Пример запроса:
     *
     * ```
     * POST /negotiations/phone_interview?resume_id=123456&vacancy_id=654321&message=new_msg
     * ```
     *
     * OperationId: invite-applicant-to-vacancy.
     * HTTP: POST /negotiations/phone_interview.
     *
     * @param InviteApplicantToVacancyPrompt $prompt DTO запроса.
     *
     * @return InviteApplicantToVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function inviteApplicantToVacancy(InviteApplicantToVacancyPrompt $prompt): InviteApplicantToVacancyResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\InviteProvider $group */
        $group = $this->operationGroup('invite');

        return $group->applicantToVacancy($prompt);
    }

    /**
     * Отметить отклики прочитанными
     *
     * OperationId: post-negotiations-topics-read.
     * HTTP: POST /negotiations/read.
     *
     * @param PostNegotiationsTopicsReadPrompt $prompt DTO запроса.
     *
     * @return PostNegotiationsTopicsReadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postNegotiationsTopicsRead(PostNegotiationsTopicsReadPrompt $prompt): PostNegotiationsTopicsReadResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\NegotiationsProvider $group */
        $group = $this->operationGroup('negotiations');

        return $group->postTopicsRead($prompt);
    }

    /**
     * Изменение шаблона ответа соискателю
     *
     * Изменение шаблона ответа для [переписки](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-messages)
     *
     * OperationId: put-mail-templates-item.
     * HTTP: PUT /employers/{employer_id}/mail_templates/{template_id}.
     *
     * @param PutMailTemplatesItemPrompt $prompt DTO запроса.
     *
     * @return PutMailTemplatesItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putMailTemplatesItem(PutMailTemplatesItemPrompt $prompt): PutMailTemplatesItemResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\MailProvider $group */
        $group = $this->operationGroup('mail');

        return $group->putTemplatesItem($prompt);
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
     * @return PutNegotiationsCollectionToNextStateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putNegotiationsCollectionToNextState(PutNegotiationsCollectionToNextStatePrompt $prompt): PutNegotiationsCollectionToNextStateResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\NegotiationsProvider $group */
        $group = $this->operationGroup('negotiations');

        return $group->putCollectionToNextState($prompt);
    }

    /**
     * Изменение предпочитаемой сортировки откликов
     *
     * OperationId: put-pref-negotiations-order.
     * HTTP: PUT /vacancies/{id}/preferred_negotiations_order.
     *
     * @param PutPrefNegotiationsOrderPrompt $prompt DTO запроса.
     *
     * @return PutPrefNegotiationsOrderResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putPrefNegotiationsOrder(PutPrefNegotiationsOrderPrompt $prompt): PutPrefNegotiationsOrderResponse
    {
        /** @var ОткликиПриглашенияРаботодателя\PrefProvider $group */
        $group = $this->operationGroup('pref');

        return $group->putNegotiationsOrder($prompt);
    }
}
