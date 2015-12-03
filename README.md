Получение актуальных курсов валют от центрального банка Российской Федерации

use Ox\Cbr\Cbr;

$course=Cbr::getCourse();

$result= json_decode($course);

print_r($result->USD);
