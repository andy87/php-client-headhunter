<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAddressPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetEmployerAddressesPrompt;
use Andy87\ClientsHh\Generated\Response\GetAddressResponse;
use Andy87\ClientsHh\Generated\Response\GetEmployerAddressesResponse;

/**
 * Provider раздела HeadHunter API "Адреса работодателя".
 * @property-read АдресаРаботодателя\AddressProvider $address
 * @property-read АдресаРаботодателя\EmployerProvider $employer
 *
 */
class АдресаРаботодателяProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'address' => АдресаРаботодателя\AddressProvider::class,
        'employer' => АдресаРаботодателя\EmployerProvider::class,
    ];

    /**
     * Получение адреса
     *
     * OperationId: get-address.
     * HTTP: GET /employers/{employer_id}/addresses/{address_id}.
     *
     * @param GetAddressPrompt $prompt DTO запроса.
     *
     * @return GetAddressResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAddress(GetAddressPrompt $prompt): GetAddressResponse
    {
        /** @var АдресаРаботодателя\AddressProvider $group */
        $group = $this->operationGroup('address');

        return $group->get($prompt);
    }

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
     * @return GetEmployerAddressesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerAddresses(GetEmployerAddressesPrompt $prompt): GetEmployerAddressesResponse
    {
        /** @var АдресаРаботодателя\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getAddresses($prompt);
    }
}
