<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\CommonReferenceData;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetProfessionalRolesDictionaryPrompt;
use Andy87\ClientsHh\Generated\Response\CommonReferenceData\Professional\GetRolesDictionaryResponse;

/**
 * Группа методов "professional" раздела HeadHunter API "Общие справочники".
 */
class ProfessionalProvider extends BaseHhProvider
{
    /**
     * Справочник профессиональных ролей
     *
     * Возвращает профессиональные роли, их категории и другую информацию о профессиональных ролях
     *
     * OperationId: get-professional-roles-dictionary.
     * HTTP: GET /professional_roles.
     *
     * @param GetProfessionalRolesDictionaryPrompt $prompt DTO запроса.
     *
     * @return GetRolesDictionaryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getRolesDictionary(GetProfessionalRolesDictionaryPrompt $prompt): GetRolesDictionaryResponse
    {
        /** @var GetRolesDictionaryResponse $response */
        $response = $this->request($prompt, GetRolesDictionaryResponse::class);

        return $response;
    }
}
