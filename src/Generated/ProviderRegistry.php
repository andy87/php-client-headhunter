<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated;

/**
 * Хранит карту лениво доступных provider-разделов HeadHunter API.
 */
class ProviderRegistry
{
    /**
     * Возвращает карту свойств клиента и provider-классов.
     *
     * @return array<string, class-string>
     */
    public static function providers(): array
    {
        return [
            'webhookApi' => Provider\WebhookApiProvider::class,
            'авторизацияПриложения' => Provider\АвторизацияПриложенияProvider::class,
            'авторизацияРаботодателя' => Provider\АвторизацияРаботодателяProvider::class,
            'адресаРаботодателя' => Provider\АдресаРаботодателяProvider::class,
            'банкДанныхОЗарплатах' => Provider\БанкДанныхОЗарплатахProvider::class,
            'вакансии' => Provider\ВакансииProvider::class,
            'информацияОМенеджере' => Provider\ИнформацияОМенеджереProvider::class,
            'информацияОРаботодателе' => Provider\ИнформацияОРаботодателеProvider::class,
            'информацияОСоискателе' => Provider\ИнформацияОСоискателеProvider::class,
            'комментарииКСоискателю' => Provider\КомментарииКСоискателюProvider::class,
            'менеджерыРаботодателя' => Provider\МенеджерыРаботодателяProvider::class,
            'общиеСправочники' => Provider\ОбщиеСправочникиProvider::class,
            'откликиПриглашенияРаботодателя' => Provider\ОткликиПриглашенияРаботодателяProvider::class,
            'перепискаОткликиПриглашенияДляСоискателя' => Provider\ПерепискаОткликиПриглашенияДляСоискателяProvider::class,
            'подсказки' => Provider\ПодсказкиProvider::class,
            'подсказкиПоКлючевымСловам' => Provider\ПодсказкиПоКлючевымСловамProvider::class,
            'подсказкиПоКомпаниям' => Provider\ПодсказкиПоКомпаниямProvider::class,
            'поискВакансий' => Provider\ПоискВакансийProvider::class,
            'поискРезюме' => Provider\ПоискРезюмеProvider::class,
            'просмотрРезюме' => Provider\ПросмотрРезюмеProvider::class,
            'работодатель' => Provider\РаботодательProvider::class,
            'сохраненныеПоискиРезюме' => Provider\СохраненныеПоискиРезюмеProvider::class,
            'справочники' => Provider\СправочникиProvider::class,
            'справочникиБанкаДанныхЗаработныхПлат' => Provider\СправочникиБанкаДанныхЗаработныхПлатProvider::class,
            'статистикаРекламныхКампанийВClickme' => Provider\СтатистикаРекламныхКампанийВClickmeProvider::class,
            'управлениеВакансиями' => Provider\УправлениеВакансиямиProvider::class,
            'услугиРаботодателя' => Provider\УслугиРаботодателяProvider::class,
            'чаты' => Provider\ЧатыProvider::class,
            'черновикиВакансий' => Provider\ЧерновикиВакансийProvider::class,
        ];
    }
}
