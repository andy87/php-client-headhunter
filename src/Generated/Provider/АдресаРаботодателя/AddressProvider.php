<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\АдресаРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAddressPrompt;
use Andy87\ClientsHh\Generated\Response\АдресаРаботодателя\Address\GetResponse;

/**
 * Группа методов "address" раздела HeadHunter API "Адреса работодателя".
 */
class AddressProvider extends BaseHhProvider
{
    /**
     * Получение адреса
     *
     * OperationId: get-address.
     * HTTP: GET /employers/{employer_id}/addresses/{address_id}.
     *
     * @param GetAddressPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetAddressPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
