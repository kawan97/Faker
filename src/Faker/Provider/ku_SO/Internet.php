<?php

namespace Faker\Provider\ku_SO;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static $safeEmailTld = array(
        'com', 'jo', 'me', 'net', 'org','krd','gov','edu','co',
    );

    protected static $tld = array(
        'biz', 'com', 'info', 'sa', 'net', 'org','krd',
    );

    protected static $lastNameAscii = array(
        'Baran','kawan' ,'Reber', 'Serhat', 'Azad', 'Kawa', 'Rojhat', 'Diyar', 'Roni', 'Alan', 'Hewar', 'Berxwedan', 'Renas', 'Sherwan', 'Zana', 'Bawar', 'Welat', 'Dijwar', 'Ceger', 'Destan', 'Ciya', 'Rewan', 'Zinar', 'Gulistan', 'Mirza', 'Sirwan', 'Peshraw', 'Qendil', 'Piroz', 'Cemsid', 'Serwan', 'Haval', 'Xweser', 'Piroz', 'Rezan', 'Hemn', 'Qamis', 'Barzan', 'Zeravan', 'Kovan', 'Raman');
    protected static $firstNameAscii = array(
        'Ako','kawan', 'Bahar', 'gwlzar', 'Dana', 'halsho', 'Farhad', 'Garmiyan', 'Haso', 'Ismail', 'Jamal', 'Kamran', 'Luqman', 'Miran', 'Nawzad', 'Osman', 'Peshraw', 'Qadar', 'Raman', 'Saman', 'Tahir', 'Umar', 'Vian', 'Wrya', 'Xamgin', 'Yadgar', 'Zanko', 'Alan', 'Bilal', 'Chia', 'Dlzar', 'Emin', 'Fardin', 'Goran', 'Haval', 'Ihsan', 'Jangi', 'Karwan', 'Latif', 'Majid', 'Narin', 'Orhan', 'Pary', 'Qadir', 'Rakan', 'Shwan', 'Tofiq', 'Uthman', 'Vartan', 'Xalid', 'Younes', 'Ayla', 'Bahar', 'Chia', 'Darya', 'Eman', 'Firooz', 'Gulala', 'Hemn', 'Isra', 'Jana', 'Kamile', 'Lana', 'Mazal', 'Nargis', 'Osna', 'Pary', 'Qashang', 'Rangin', 'Shilan', 'Tara', 'Umida', 'Vana', 'Widad', 'Xale', 'Yadgar', 'Zara', 'Arman', 'Birin', 'Chinar', 'Dilshad', 'Eman', 'Fatin', 'Gulbahar', 'Hana', 'Inci', 'Jiyar', 'Khatun', 'Lana', 'Mina', 'Narmin', 'Osna', 'Pervin', 'Qurat', 'Rasa', 'Shirin', 'Tara', 'Urfa', 'Vian', 'Wahida', 'Xozga'

    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
