<?php

namespace PersianTools\Traits;

trait GetBankNameFromCardNumber
{

    public static $banksCode = [
        [
            'name' => "بانک آینده",
            'code' => "636214",
        ],
        [
            'name' => "بانک اقتصاد نوین",
            'code' => "627412",
        ],
        [
            'name' => "بانک انصار",
            'code' => "627381",
        ],
        [
            'name' => "بانک ایران زمین",
            'code' => "505785",
        ],
        [
            'name' => "بانک پارسیان",
            'code' => "622106",
        ],
        [
            'name' => "بانک پارسیان",
            'code' => "627884",
        ],
        [
            'name' => "بانک پاسارگاد",
            'code' => "502229",
        ],
        [
            'name' => "بانک پاسارگاد",
            'code' => "639347",
        ],
        [
            'name' => "پست بانک ایران",
            'code' => "627760",
        ],
        [
            'name' => "بانک تجارت",
            'code' => "585983",
        ],
        [
            'name' => "بانک تجارت",
            'code' => "627353",
        ],
        [
            'name' => "بانک توسعه تعاون",
            'code' => "502908",
        ],
        [
            'name' => "بانک توسعه صادرات",
            'code' => "207177",
        ],
        [
            'name' => "بانک توسعه صادرات",
            'code' => "627648",
        ],
        [
            'name' => "بانک حکمت ایرانیان",
            'code' => "636949",
        ],
        [
            'name' => "بانک خاورمیانه",
            'code' => "585949",
        ],
        [
            'name' => "بانک دی",
            'code' => "502938",
        ],
        [
            'name' => "بانک رسالت",
            'code' => "504172",
        ],
        [
            'name' => "بانک رفاه کارگران",
            'code' => "589463",
        ],
        [
            'name' => "بانک سامان",
            'code' => "621986",
        ],
        [
            'name' => "بانک سپه",
            'code' => "589210",
        ],
        [
            'name' => "بانک سرمایه",
            'code' => "639607",
        ],
        [
            'name' => "بانک سینا",
            'code' => "639346",
        ],
        [
            'name' => "بانک شهر",
            'code' => "502806",
        ],
        [
            'name' => "بانک شهر",
            'code' => "504706",
        ],
        [
            'name' => "بانک صادرات ایران",
            'code' => "603769",
        ],
        [
            'name' => "بانک صادرات ایران",
            'code' => "903769",
        ],
        [
            'name' => "بانک صنعت و معدن",
            'code' => "627961",
        ],
        [
            'name' => "بانک قرض الحسنه مهر",
            'code' => "639370",
        ],
        [
            'name' => "بانک قوامین",
            'code' => "639599",
        ],
        [
            'name' => "بانک کارآفرین",
            'code' => "627488",
        ],
        [
            'name' => "بانک کشاورزی",
            'code' => "603770",
        ],
        [
            'name' => "بانک کشاورزی",
            'code' => "639217",
        ],
        [
            'name' => "بانک گردشگری",
            'code' => "505416",
        ],
        [
            'name' => "بانک گردشگری",
            'code' => "505426",
        ],
        [
            'name' => "بانک مرکزی ایران",
            'code' => "636797",
        ],
        [
            'name' => "بانک مسکن",
            'code' => "628023",
        ],
        [
            'name' => "بانک ملت",
            'code' => "610433",
        ],
        [
            'name' => "بانک ملت",
            'code' => "991975",
        ],
        [
            'name' => "بانک ملی ایران",
            'code' => "170019",
        ],
        [
            'name' => "بانک ملی ایران",
            'code' => "603799",
        ],
        [
            'name' => "بانک مهر ایران",
            'code' => "606373",
        ],
        [
            'name' => "موسسه کوثر",
            'code' => "505801",
        ],
        [
            'name' => "موسسه اعتباری ملل",
            'code' => "606256",
        ],
        [
            'name' => "موسسه اعتباری توسعه",
            'code' => "628157",
        ],
    ];


    /**
     * get bank name from card number
     *
     * @param  string  $digits
     * @return string
     */
    static public function getBankNameFromCardNumber(string $digits)
    {
        if (!$digits) return;

        if ($digits && strlen($digits) === 16) {

            $code = substr($digits, 0, 6);
            foreach(self::$banksCode as $bankCode)
                if($bankCode['code'] ==  $code)
                {
                    $findBank = $bankCode;
                    break;
                }

            if (isset($findBank))
                return $findBank['name'];
            else
                return null;

        } else
            return null;

    }
}
