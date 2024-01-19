<?php

namespace Faker\Provider\ku_SO;

class Address extends \Faker\Provider\Address
{
    protected static $streetPrefix = array('شەقام', 'گەڕەک');

    /**
     */
    protected static $cityName = array(
       'دهۆك', 'هەولێر', 'سلێمانی', 'كركوك', 'كەنداوێ', 'كەندەل', 'مەنگسور', 'سوران', 'قەلەئەت', 'پلنگ', 'خانقین', 'قرەتپێنا', 'خەبات', 'ماوەلەر', 'صاحب', 'كەلار', 'دهەولەر', 'نوپرەش', 'دهەربندی', 'دهەراول', 'شێلادزە', 'قەرەچەوان', 'بانی', 'دهەكان', 'دهەنگاوێ', 'گەڕمیان', 'زەوین', 'زیوان', 'دهەلێر', 'نوژهان', 'سلیمانەی ـ زاخۆ', 'ئازاد', 'سیلێ', 'كەلار', 'دهەری', 'تەلیەر', 'پیرەمێرگ', 'شەرزە', 'پشتيكوه', 'دهەسەر', 'شەلاڤی', 'كەنداوێ', 'كەلار', 'ئەربیل', 'دهۆك', 'هەولێر', 'سلێمانی', 'كركوك', 'رانیا', 'چمچمال', 'زاخو', 'كەنداوێ', 'كەندەل', 'مەنگسور', 'سوران', 'قەلەئەت', 'پلنگ', 'خانقین', 'قرەتپێنا', 'خەبات', 'ماوەلەر', 'صاحب', 'كەلار', 'دهەولەر', 'نوپرەش', 'دهەربندی', 'دهەراول', 'شێلادزە', 'قەرەچەوان', 'بانی', 'دهەكان', 'دهەنگاوێ', 'گەڕمیان', 'زەوین', 'زیوان', 'دهەلێر', 'نوژهان', 'سلیمانەی ـ زاخۆ', 'ئازاد', 'سیلێ', 'كەلار', 'دهەری', 'تەلیەر', 'پیرەمێرگ', 'شەرزە', 'پشتيكوه', 'دهەسەر', 'شەلاڤی', 'كەنداوێ', 'كەلار', 'ئەربیل', 'دهۆك', 'هەولێر', 'سلێمانی', 'كركوك', 'رانیا', 'چمچمال', 'زاخو', 'كەنداوێ', 'كەندەل', 'مەنگسور', 'سوران', 'قەلەئەت', 'پلنگ', 'خانقین', 'قرەتپێنا', 'خەبات', 'ماوەلەر', 'صاحب', 'كەلار', 'دهەولەر', 'نوپرەش', 'دهەربندی', 'دهەراول', 'شێلادزە', 'قەرەچەوان', 'بانی', 'دهەكان', 'دهەنگاوێ', 'گەڕمیان', 'زەوین', 'زیوان', 'دهەلێر', 'نوژهان', 'سلیمانەی ـ زاخۆ', 'ئازاد', 'سیلێ', 'كەلار', 'دهەری', 'تەلیەر', 'پیرەمێرگ', 'شەرزە', 'پشتيكوه', 'دهەسەر', 'شەلاڤی', 'كەنداوێ', 'كەلار'
    );

    /**
     */
    protected static $subdivisions = array(
        'باکور','باشور','رۆژئاوا','ڕۆژهەڵات','ناوەند'
    );

    /**
     */
    protected static $governorates = array(
        'سلێمانی', 'هەولێر', 'کەرکوک', 'دهۆک',
    );

    protected static $buildingNumber = array('#####', '####', '##');

    protected static $postcode = array('#####', '#####-####');

    /**
     */
    protected static $country = array(
        'ئەفغانستان',
         'ئاڵبانیا',
         'ئەلجەزاییر',
        'ئاندۆرا',
        'ئانگۆلا',
         'ئانتیگوا و باربوودا',
        'ئارژانتین',
         'ئەرمەنستان',
         'ئوسترالیا',
         'نەمسا',
        'ئازەربایجان',
        'باهاما',
        'بەحرێن',
        'بەنگلادێش',
         'باربادۆس',
       'بیلاڕووس',
         'بلژیک',
       'بێلیز',
         'بێنین',
       'بووتان',
        'بۆلیڤیا',
        'بۆسنیا و هێرزێگۆڤینا',
         'بۆتسوانا',
        'بڕازیل',
        'بروونێ',
        'بولغارستان',
         'بورکینا فاسۆ',
         'بروندی',
        'کابۆ ڤێرد',
        'کامبۆدیا',
        'کامێرۆن',
        'کەنەدا',
        'کۆماری ئەفریقای ناوەندی',
       'چاد',
         'شیلی',
         'چین',
       'کۆلۆمبیا',
      'کۆمۆڕۆس',
        'کۆنگۆ',
        'کۆستاریکا',
        'کرواتیا',
       'کووبا',
         'قبرس',
         'کۆماری چێک',
         'کۆماری دیموکراتیکی کۆنگۆ',
        'دانمارک',
         'جیبووتی',
        'دۆمێنیکا',
        'دۆمێنیکەن',
         'ئێکوادۆر',
         'میسر',
         'ئێلسالڤادۆر',
         'گینەی ئوستوایی',
        'ئێریتریا',
         'ئستۆنیا',
         'ئسواتینی',
         'ئیتۆپیا',
       'فیجی',
         'فینلەند',
        'فەڕەنسا',
         'گابۆن',
        'گامبیا',
         'گورجستان',
      'ئەڵمانیا',
         'غەنا',
       'یۆنان',
        'گرێنادا',
         'گواتمالا',
         'گینە',
         'گینەی بیسائۆ',
         'گایانا',
        'هایتی',
         'هۆندووراس',
        'هەنگاریا',
         'ئایسلەند',
        'هندوستان',
         'ئیندۆنێزیا',
       'کۆماری ئیسلامیی ئێران',
         'عێراق',
        'ئیرلەند',
        'ئیسڕائیل',
         'ئیتاڵیا',
         'جامائیکا',
         'ژاپۆن',
         'ئۆردن',
        'قه‌زاقستان',
         'کێنیا',
         'کیریباتی',
        'کوێت',
         'قرقیزستان',
         'لائۆس',
         'لاتڤیا',
         'لوبنان',
         'لێسێتۆ',
         'لیبێریا',
         'لیبیا',
         'لیختێنشتاین',
         'لیتوانیا',
        'لوگزامبۆرگ',
        'ماداگاسکار',
         'مالاوی',
       'مالێزیا',
         'ماڵدیڤس',
         'مالی',
       'ماڵتا',
        'دوورگەی مارشاڵ',
         'مۆریتانیا',
       'مۆریشس',
     'مێکزیکۆ',
        'میکرۆنێزیا',
         'مۆناکۆ',
        'مەغولستان',
         'مۆنتێنێگرۆ',
        'مەراکش',
        'مۆزامبیک',
         'میانمار',
         'نامیبیا',
       'ناورو',
        'نیپاڵ',
         'هۆڵەندا',
        'نیوزیلەند',
         'نیکاراگوا',
         'نیجێر',
         'نیجێریا',
         'نۆروێژ',
         'عومان',
         'پاکستان',
        'پالاو',
         'پاناما',
        'پاپوا گینەی نوێ',
         'پاراگوای',
        'پێرو',
         'فلیپین',
        'پۆڵۆنیا',
         'پۆرتوگاڵ',
         'قەتەر',
     'کۆماری کۆریا',
         'مۆڵدۆڤا',
         'ڕۆمانیا',
         'ڕووسیا',
         'ڕواندا',
         "سەنت کیتس و نەڤیس",
        'سەنت لوسیا',
         'سەنت وینسێنت و گرێنادینس',
         'سامۆوا',
         'سان مارینۆ',
        'سائۆ تۆمێ و پرینسیپێ',
         'عەرەبستانی سعوودی', 
         'سێنێگال',
       'سێربیا',
         'سەیشێل',
        'سیێرا لیۆن',
         'سینگاپۆر',
        'سلۆڤاکیا',
        'سلۆڤێنیا',
         'دوورگەی سۆڵۆمۆن',
         'سۆمالیا',
        'ئەفریقای باشوور',
        'سوودانی باشوور',
        'ئیسپانیا',
         'سری لانکا',
         'سوودان',
      'سورینام',
       'سوید',
        'سویسڕا',
         'سووریا',
         'تاجیکستان',
       'تایلەند',
        'مەکدۆنیا',
        'تیمووری ڕۆژهه‌ڵات',
         'تۆگۆ',
        'تۆنگا',
         'تریناد و تۆباگۆ',
         'تونس',
        'تورکیا',
        'تورکمەنستان',
        'توڤالو',
       'ئوگاندا',
         'ئوکراینا',
         'ئیمارات',
         'بریتانیا',
         'تانزانیا',
        'ئەمریکا',
         'ئوروگوای',
        'ئوزبەکستان',
         'ڤانواتو',
        'ڤێنێزوێلا',
        'ڤێتنام',
         'یەمەن',
         'زامبیا',
         'زیمبابوێ',

    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    );

    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
    );

    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}",
    );

    protected static $secondaryAddressFormats = array('ژمارەی شوقە. ##', 'ژمارەی بینا ##');


    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }


    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

 
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }


    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }


    public static function subdivision()
    {
        return static::randomElement(static::$subdivisions);
    }

  
    public static function governorate()
    {
        return static::randomElement(static::$governorates);
    }
}
