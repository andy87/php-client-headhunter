<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\МенеджерыРаботодателя\Manager;

use Andy87\ClientsHh\Generated\Response\GetManagerAccountsResponse as BaseGetManagerAccountsResponse;

/**
 * Ответ HeadHunter API [GET] /manager_accounts/mine.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-manager-accounts
 *
 * @property string $current_account_id Идентификатор текущего рабочего аккаунта менеджера. Совпадает со значением переданного в заголовке `X-Manager-Account-Id`
 * @property bool $is_primary_account_blocked Заблокирован ли главный рабочий аккаунт менеджера
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\ManagerAccount> $items Список рабочих аккаунтов менеджера
 * @property string $primary_account_id Идентификатор главного рабочего аккаунта менеджера
 */
class GetAccountsResponse extends BaseGetManagerAccountsResponse
{
}
