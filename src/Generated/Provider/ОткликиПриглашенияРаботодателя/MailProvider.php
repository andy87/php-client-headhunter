<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ОткликиПриглашенияРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetMailTemplatesPrompt;
use Andy87\ClientsHh\Generated\Prompt\PutMailTemplatesItemPrompt;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Mail\GetTemplatesResponse;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Mail\PutTemplatesItemResponse;

/**
 * Группа методов "mail" раздела HeadHunter API "Отклики/приглашения работодателя".
 */
class MailProvider extends BaseHhProvider
{
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
     * @return GetTemplatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getTemplates(GetMailTemplatesPrompt $prompt): GetTemplatesResponse
    {
        /** @var GetTemplatesResponse $response */
        $response = $this->request($prompt, GetTemplatesResponse::class);

        return $response;
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
     * @return PutTemplatesItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putTemplatesItem(PutMailTemplatesItemPrompt $prompt): PutTemplatesItemResponse
    {
        /** @var PutTemplatesItemResponse $response */
        $response = $this->request($prompt, PutTemplatesItemResponse::class);

        return $response;
    }
}
