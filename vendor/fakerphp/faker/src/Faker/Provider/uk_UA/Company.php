<?php

namespace Faker\Provider\uk_UA;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{companyName}}',                                      // Вектор
        '{{companyPrefix}} "{{companyName}}"',                  // ТОВ "Інфоком"
        '{{companyName}}-{{companySuffix}}',                    // Сервіс-Плюс
        '{{companyPrefix}} "{{companyName}}-{{companySuffix}}"', // ПАТ "Альфа-Стиль"
    ];

    protected static $urlFormats = [
        '{{companyName}}',
        '{{companyName}}-{{companySuffix}}',
    ];

    protected static $companyPrefix = ['ТОВ', 'ПП', 'ПАТ', 'ПрАТ'];
    protected static $companySuffix = ['Сервіс', 'Плюс', 'Груп', 'Стиль', 'Дизайн'];

    protected static $companyName = [
        'Вектор', 'Едельвейс', 'Смарт', 'Альфа', 'Система', 'Універсал',
        'Інфоком', 'Макс', 'Планета', 'Вектор', 'Приват', 'Еко', 'Мега',
        'Мегамакс', 'Мульти', 'Майнер',
    ];

    /**
     * @see list of Ukraine job title (2017-08-09), source: https://uk.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BF%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%96%D0%B9
     */
    protected static $jobTitleFormat = [
        'Агроном', 'Адвокат', 'Актор', 'Акушер', 'Антрополог', 'Аптекар', 'Архітектор', 'Археолог', 'Астронавт', 'Астрофізик', 'Автослюсар', 'Агент',
        'Бариста', 'Бармен', 'Бібліограф', 'Біолог', 'Бізнесмен', 'Ботанік', 'Будівельник', 'Будник', 'Бухгалтер', 'Бібліотекар',
        'Вантажник', 'Ведучий', 'Ветеринар', 'Випробувач', 'Водій', 'Вчитель', 'Візажист',
        'Гардеробник', 'Географ', 'Геолог', 'Геофізик', 'Гицель', 'Гінеколог', 'Гірник', 'Гірничий інженер', 'Головний меркшейдер', 'Графік', 'Громадський діяч',
        'Ґрунтознавець',
        'Дантист', 'Державний службовець', 'Детектив', 'Дизайнер', 'Дипломат', 'Диригент', 'Ді-джей', 'Доморобітниця', 'Доцент', 'Драматург',
        'Економіст', 'Електрик', 'Електромонтер', 'Електромонтажник', 'Електрослюсар', 'Електротехнік', 'Епідеміолог', 'Етнограф', 'Еколог',
        'Євнух', 'Єгер',
        'Журналіст', 'Живописець',
        'Золотар', 'Зоолог',
        'Інженер комп’ютерної техніки', 'Інженер', 'Іконописець', 'Історик', 'Інспектор', 'Інструктор',
        'Каскадер', 'Клавішник', 'Клоун', 'Композитор', 'Консьєрж', 'Конструктор', 'Коуч', 'Краєзнавець', 'Криміналіст', 'Кушнір', 'Кіноактор', 'Кінокритик', 'Кінорежисер', 'Кур’єр', 'Кухар', 'Кінолог', 'Круп’є',
        'Лаборант', 'Льотчик', 'Лікар', 'Ліпник архітектурних деталей', 'Лісничий', 'Літературознавець', 'Логопед', 'Локсмайстер', 'Лор',
        'Математик', 'Машиніст', 'Медик', 'Менеджер', 'Мистецтвознавець', 'Мірошник', 'Мікробіолог', 'Мінералог', 'Мовознавець', 'Модельєр', 'Модельник', 'Музикант', 'Музикознавець', 'Музичний редактор', 'Маркетолог', 'М’ясник', 'Мікробіолог',
        'Намотувальник', 'Науковець', 'Няня', 'Нотаріус', 'Навідник-оператор',
        'Озеленювач', 'Окуліст', 'Онколог', 'Оператор', 'Організатор', 'Охоронець', 'Охоронник',
        'Паблік рилейшнз', 'Палеонтолог', 'Паралегал', 'Парфумер', 'Пасічник', 'Патологоанатом', 'Педагог', 'Пекар', 'Перекладач', 'Перукар', 'Петрограф', 'Письменник', 'Піаніст', 'Підприємець', 'Пілот', 'Правник', 'Прибиральник', 'Програміст', 'Провізор', 'Прокурор', 'Промисловець', 'Професор', 'Психолог', 'Політик', 'Публіцист', 'Продюсер',
        'Ревізор', 'Режисер', 'Різноробочий', 'Реабілітолог', 'Редактор', 'Реставратор', 'Ріелтор',
        'Сантехнік', 'Священик', 'Складальник', 'Скульптор', 'Соціолог', 'Співак', 'Спортсмен', 'Сценарист', 'Стрінгер', 'Стропальник', 'Стоматолог', 'Слідчий', 'Стиліст', 'Секретар', 'Стрілочник', 'Стюардеса', 'Суддя', 'Стиліст',
        'Таксист', 'Тамада', 'Танцівник', 'Тенісист', 'Терапевт', 'Ткач', 'Токар', 'Тракторист',
        'Фармацевт', 'Фермер', 'Фізик', 'Філолог', 'Фольклорист', 'Формувальник', 'Фотограф', 'Футболіст', 'Флорист', 'Фінансист',
        'Хірург', 'Хімік', 'Художник', 'Хореограф', 'Хормейстер',
        'Шериф', 'Швачка', 'Штукатур',
        'Ювелір', 'Юрист',
    ];

    public function companyUrl()
    {
        $format = static::randomElement(static::$urlFormats);

        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    public static function companyName()
    {
        return static::randomElement(static::$companyName);
    }
}
