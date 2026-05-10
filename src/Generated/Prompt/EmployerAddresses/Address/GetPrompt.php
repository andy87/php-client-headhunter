<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerAddresses\Address;

use and_y87\ClientsHh\Generated\Prompt\GetAddressPrompt as BaseGetAddressPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/addresses/{address_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-address
 *
 * @property string $employer_id Идентификатор работодателя. Чтобы получить его, используйте метод [Информация о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info)
 * @property string $address_id Идентификатор адреса работодателя
 * @property bool|null $with_manager Если true, ответ будет содержать информацию о менеджере создавшем адрес
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetPrompt extends BaseGetAddressPrompt
{
}
