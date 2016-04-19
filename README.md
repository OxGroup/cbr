Получение актуальных курсов валют от центрального банка Российской Федерации

use Ox\Cbr\Cbr;

$date="02/03/2002"; //02/03/2002 or "";

$course=Cbr::getCourse($date);

$result= json_decode($course);

print_r($result);


stdClass Object
(

    [AUD] => stdClass Object
        (
            [charCode] => AUD
            [nominal] => 1
            [name] => 1
            [value] => 16,0102
        )

    [GBP] => stdClass Object
        (
            [charCode] => GBP
            [nominal] => 1
            [name] => 1
            [value] => 43,8254
        )

    [BYR] => stdClass Object
        (
            [charCode] => BYR
            [nominal] => 1000
            [name] => 1000
            [value] => 18,4290
        )...
