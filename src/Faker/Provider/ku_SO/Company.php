<?php

namespace Faker\Provider\ku_SO;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    );

    protected static $bsWords = array(
        array()
    );

    protected static $catchPhraseWords = array(
        array('خزمەتگوزارییەکان', 'چارەسەرەکان', 'سیستەمەکان'),
        array(
            'زێڕ', 'زیرەک', 'پێشکەوتوو', 'پێشکەوتوو', 'نێودەوڵەتی', 'تایبەتمەند', 'خێرا',
            'ئۆپتیمال', 'داهێنەر', 'یەکگرتوو', 'گۆڕاو', 'ئایدیاڵ'

            ),
    );

    protected static $companyPrefix = array('کۆمپانیا', 'دامەزراوە', 'گرووپ', 'ئۆفیس', 'ئەکادیمیا', 'پێشانگا');

    protected static $companySuffix = array('و کوڕەکانی', 'کۆمپانیای پشکی سنووردار', 'LLC', 'کۆمپانیای پشکی گشتی', 'و هاوبەشەکانی');

    /**
   
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

    /**
     */
    public function catchPhrase()
    {
        $result = array();
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join(' ', $result);
    }

    /**
     */
    public function bs()
    {
        $result = array();
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join(' ', $result);
    }

    /**
    
     **/
    public static function companyIdNumber()
    {
        $partialValue = static::numerify(700 . str_repeat('#', 6));
        return Luhn::generateLuhnNumber($partialValue);
    }
}
