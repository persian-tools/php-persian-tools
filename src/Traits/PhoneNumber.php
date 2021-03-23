<?php

namespace PersianTools\Traits;

trait PhoneNumber
{

    public static $MCI = [
        "910" => [
            'base' => "کشوری",
            'province' => [],
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "914" => [
            'province' => ["آذربایجان شرقی", "اردبیل", "اصفهان"],
            'base' => "آذربایجان غربی",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "911" => [
            'province' => ["گلستان", "گیلان"],
            'base' => "مازندران",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "912" => [
            'province' => ["البرز", "زنجان", "سمنان", "قزوین", "قم", "برخی از شهرستان های استان مرکزی"],
            'base' => "تهران",
            'type' => ["permanent"],
            'operator' => "همراه اول",
        ],
        "913" => [
            'province' => ["یزد", "چهارمحال و بختیاری", "کرمان"],
            'base' => "اصفهان",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "915" => [
            'province' => ["خراسان شمالی", "خراسان جنوبی", "سیستان و بلوچستان"],
            'base' => "خراسان رضوی",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "916" => [
            'province' => ["لرستان", "فارس", "اصفهان"],
            'base' => "خوزستان",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "917" => [
            'province' => ["بوشهر", "کهگیلویه و بویر احمد", "هرمزگان"],
            'base' => "فارس",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "918" => [
            'province' => ["کردستان", "ایلام", "همدان"],
            'base' => "کرمانشاه",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "919" => [
            'province' => ["البرز", "سمنان", "قم", "قزوین", "زنجان"],
            'base' => "تهران",
            'type' => ["credit"],
            'operator' => "همراه اول",
        ],
        "990" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "همراه اول",
        ],
        "991" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["permanent", "credit"],
            'operator' => "همراه اول",
        ],
        "992" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "همراه اول",
        ],
        "993" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "همراه اول",
        ],
        "994" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "همراه اول",
        ],
    ];

    public static $Irancell = [
        "930" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "933" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "935" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "936" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "937" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "938" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "939" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "901" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "902" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "903" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "905" => [
            'province'=> [],
            'base'=> "کشوری",
        	'type' => ["permanent", "credit"],
            'operator'=> "ایرانسل",
        ],
        "904" => [
            'province'=> [],
            'base'=> "کشوری",
            'model'=> "سیم‌کارت کودک",
            'type'=> ["credit"],
            'operator'=> "ایرانسل",
        ],
        "941" => [
            'province'=> [],
            'base'=> "کشوری",
            'model'=> "TD-LTE",
            'type'=> ["credit"],
            'operator'=> "ایرانسل",
        ]
    ];

    public static $ShatelMobile = [
        "998" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "شاتل موبایل",
        ]
    ];

    public static $Taliya = [
        "932" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "تالیا",
        ],
    ];

    public static $RightTel = [
        "920" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["permanent"],
            'operator' => "رایتل"
        ],
        "921" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "رایتل"
        ],
        "922" => [
            'province' => [],
            'base' => "کشوری",
            'type' => ["credit"],
            'operator' => "رایتل"
        ],
    ];

    public static $mobileRegex = '/^(?:[+|0{2}]?98)?(?:0)?(\d{3})+(\d{3})+(\d{4})$/';

    public static function prefixes(){
        return array_keys(
            self::$MCI +
            self::$Taliya +
            self::$RightTel +
            self::$Irancell +
            self::$ShatelMobile
        );

    }

    public static function operators(){
        return
            self::$MCI +
            self::$Taliya +
            self::$Irancell +
            self::$ShatelMobile +
            self::$RightTel;
    }

    /**
     * @param  string $mobile
     * @return string
     */
    static public function getPhonePrefix(string $mobile)
    {
        $matches = [];
        preg_match(static::$mobileRegex,$mobile,$matches);
        return $matches[1] ?? '';
    }

    /**
     * @param  string $mobile
     * @return string
     */
    static public function phoneNumberValidator(string $mobile)
    {
        return preg_match(static::$mobileRegex,$mobile) && in_array(self::getPhonePrefix($mobile),self::prefixes());
    }

    /**
     * @param  string $mobile
     * @return string
     */
    static public function phoneNumberDetail(string $mobile)
    {
        if(self::phoneNumberValidator($mobile))
        {
            $prefix = self::getPhonePrefix($mobile);
            return self::operators()[$prefix] ?? '';
        }
        return null;
    }
}
