<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Suggestions;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetProfessionalRolesSuggestsPrompt;
use and_y87\ClientsHh\Generated\Response\Suggestions\Professional\GetRolesSuggestsResponse;

/**
 * Группа методов "professional" раздела HeadHunter API "Подсказки".
 */
class ProfessionalProvider extends BaseHhProvider
{
    /**
     * Подсказки по профессиональным ролям
     *
     * OperationId: get-professional-roles-suggests.
     * HTTP: GET /suggests/professional_roles.
     *
     * @param GetProfessionalRolesSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetRolesSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getRolesSuggests(GetProfessionalRolesSuggestsPrompt $prompt): GetRolesSuggestsResponse
    {
        /** @var GetRolesSuggestsResponse $response */
        $response = $this->request($prompt, GetRolesSuggestsResponse::class);

        return $response;
    }
}
