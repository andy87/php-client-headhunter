<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\АдресаРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetEmployerAddressesPrompt;
use Andy87\ClientsHh\Generated\Response\АдресаРаботодателя\Employer\GetAddressesResponse;

/**
 * Группа методов "employer" раздела HeadHunter API "Адреса работодателя".
 */
class EmployerProvider extends BaseHhProvider
{
    /**
     * Список адресов работодателя
     *
     * Возвращает список адресов работодателя. Для компаний с большим количеством адресов, возможна ситуация, когда между созданием адреса и его чтением будет задержка. То есть, только что созданный адрес не будет содержаться в теле ответа
     *
     * OperationId: get-employer-addresses.
     * HTTP: GET /employers/{employer_id}/addresses.
     *
     * @param GetEmployerAddressesPrompt $prompt DTO запроса.
     *
     * @return GetAddressesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAddresses(GetEmployerAddressesPrompt $prompt): GetAddressesResponse
    {
        /** @var GetAddressesResponse $response */
        $response = $this->request($prompt, GetAddressesResponse::class);

        return $response;
    }
}
