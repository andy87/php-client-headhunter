<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerNegotiations\Negotiations;

use and_y87\ClientsHh\Generated\Prompt\PutNegotiationsCollectionToNextStatePrompt as BasePutNegotiationsCollectionToNextStatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /negotiations/{id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/put-negotiations-collection-to-next-state
 *
 * @property string $id Идентификатор [коллекции](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) топиков, в которую будет перенесено состояние отклика
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string $topic_id Идентификаторы откликов. Допускается передавать не более 50 идентификаторов, перечисляя их через амперсанд, например: `topic_id=1&topic_id=2&topic_id=3...&topic_id=50`
 * @property string|null $address_id Идентификатор [адреса](https://api.hh.ru/openapi/redoc#tag/Adresa-rabotodatelya), который будет указан в приглашении
 * @property string|null $message Сообщение, которое будет отправлено соискателю на электронную почту. Используйте [шаблоны](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-mail-templates) для получения текстов
 * @property bool|null $send_sms Если установлено `true`, соискателю будет отправлено SMS-уведомление о приглашении. Обратите внимание, что в SMS-сообщении используется стандартный текст, изменить его нельзя
 */
class PutCollectionToNextStatePrompt extends BasePutNegotiationsCollectionToNextStatePrompt
{
}
