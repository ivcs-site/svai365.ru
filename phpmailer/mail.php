<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'estretch2003@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'eadas432ghf#dsa$'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('estretch2003@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('zakaz@svai365.ru');     // Кому будет уходить письмо 
$mail->isHTML(true);             

if ($_POST['name_form'] == 'request-reconstruct') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $dist = $_POST['distance'];
    $info = $_POST['info'];

    $mail->Subject = 'Заказ реконструкции фундамента';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Площадь дома: <b> ' . $size . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist . '</b><br> Дополнительная информация: <b> ' . $info  . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-expert') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $dist = $_POST['distance'];
    $info = $_POST['info'];

    $mail->Subject = 'Заказ вызова эксперта';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Площадь дома: <b> ' . $size . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist . '</b><br> Дополнительная информация: <b> ' . $info . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-plinth') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $dist = $_POST['distance'];
    $info = $_POST['info'];

    $mail->Subject = 'Заказ утепления цоколя или его декоративное покрытие';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Площадь дома: <b> ' . $size . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist . '</b><br> Дополнительная информация: <b> ' . $info . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-review') {
    $review = $_POST['review'];
    $name = $_POST['name'];
    $city = $_POST['city'];

    $mail->Subject = 'Отзыв - главная страница';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Отзыв: <b> ' . $review . '</b><br> Населенный пункт: <b> ' . $city . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-phone') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $dist = $_POST['distance'];
    $info = $_POST['info'];

    $mail->Subject = 'Заказ звонка';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Площадь дома: <b> ' . $size . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist . '</b><br> Дополнительная информация: <b> ' . $info . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-material') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $material = $_POST['material'];
    $dist = $_POST['distance'];

    $mail->Subject = 'Заказ материала';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Материал: <b> ' . $material . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist  . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-price') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $dist = $_POST['distance'];
    $info = $_POST['info'];

    $mail->Subject = 'Заказ на получение сметы';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> E-mail: <b> ' . $email . '</b><br> Длина строения: <b> ' . $height . '</b><br> Ширина строения: <b> ' . $width . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist . '</b><br> Дополнительная информация: <b> ' . $info  . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-project') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $material = $_POST['material'];
    $dist = $_POST['distance'];
    $info = $_POST['info'];

    $mail->Subject = 'Заказ на создание проекта';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Площадь дома: <b> ' .  $size . '</b><br> Материал: <b> ' . $material . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist . '</b><br> Дополнительная информация: <b> ' . $info . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-base') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $material = $_POST['material'];
    $dist = $_POST['distance'];
    $info = $_POST['info'];

    $mail->Subject = 'Заказ на базу отдыха под ключ';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Площадь дома: <b> ' .  $size . '</b><br> Материал: <b> ' . $material . '</b><br> Растояние от МКАД или Населенный пункт: <b> ' . $dist . '</b><br> Дополнительная информация: <b> ' . $info . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'request-review-houses') {
    $review = $_POST['review'];
    $name = $_POST['name'];
    $city = $_POST['city'];

    $mail->Subject = 'Отзыв - Каркасные дома';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Отзыв: <b> ' . $review . '</b><br> Населенный пункт: <b> ' . $city . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'work') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $skills = $_POST['skills'];
    $highLevel = $_POST['highLevel'];
    $driverCard = $_POST['driverCard'];
    $mode = $_POST['mode'];

    $mail->Subject = 'Заявка со страницы найма';
    $mail->Body    = 'Имя: <b> ' . $name . '</b><br> Телефон: <b> ' . $phone . '</b><br> Что умеете ремонтировать?: <b> ' . $skills . '</b><br> Какие виды ремонтных работ умеете выполнять на высоком уровне?: <b> ' . $highLevel . '</b><br> Имеете ли Вы водительское удостоверение и личный транспорт?: <b> ' . $driverCard . '</b><br> Какой вид занятости для Вас предпочтительнее (полная, частичная, график)?: <b> ' . $mode  . '</b>';
    $mail->AltBody = '';
    $mail->send();
} elseif ($_POST['name_form'] == 'quiz') {
    $service = $_POST['service'];

    $mail->Subject = 'Квиз на главной странице';
    $mail->Body    = 'Услуга: <b> ' . $service . '</b>';

    if ($_POST['service'] == 'Реконструкция фундамента и свайное поле') {
        if($_POST['type'] == 'Реконструкция фундамента') {
            $mail->Body = $mail->Body . '<br> Реконструкция или новый фундамент?: <b> ' . $_POST['type'];
            $reconstrSize = $_POST['reconstr-size-1'];
            $reconstrSizeText = $_POST['reconstr-size-1-text'];
            if ($reconstrSizeText != '') {
                $mail->Body = $mail->Body . '</b><br> Площадь строения: <b> ' . $reconstrSizeText;
            } else {
                $mail->Body = $mail->Body . '</b><br> Площадь строения: <b> ' . $reconstrSize;
            }
            $reconstrFloors = $_POST['reconstr-floors-1'];
            $reconstrDistance = $_POST['reconstr-distance-1'];
            $reconstrGift = $_POST['reconstr-gift-1'];
            $mail->Body = $mail->Body . '</b><br> Количество этажей: <b> ' . $reconstrFloors . '</b><br> Укажите расстояние от МКАД: <b> ' . $reconstrDistance . '</b><br> Выберите подарок: <b> ' . $reconstrGift; 
            $reconstrDate = $_POST['reconstr-date-1'];
            $reconstrDateText = $_POST['reconstr-date-1-text'];
            if($reconstrDateText != "") {
                $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $reconstrDateText . '</b>';
            } else {
                $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $reconstrDate . '</b>';
            }
        } elseif($_POST['type'] == 'Свайное поле для нового строения') {
            $mail->Body = $mail->Body . '<br> Реконструкция или новый фундамент?: <b> ' . $_POST['type'];
            $reconstrSize = $_POST['reconstr-size-1'];
            $reconstrSizeText = $_POST['reconstr-size-1-text'];
            if ($reconstrSizeText != '') {
                $mail->Body = $mail->Body . '</b><br> Площадь строения: <b> ' . $reconstrSizeText;
            } else {
                $mail->Body = $mail->Body . '</b><br> Площадь строения: <b> ' . $reconstrSize;
            }
            $reconstrFloors = $_POST['reconstr-floors-1'];
            $reconstrDistance = $_POST['reconstr-distance-1'];
            $reconstrGift = $_POST['reconstr-gift-1'];
            $mail->Body = $mail->Body . '</b><br> Количество этажей: <b> ' . $reconstrFloors . '</b><br> Укажите расстояние от МКАД: <b> ' . $reconstrDistance . '</b><br> Выберите подарок: <b> ' . $reconstrGift; 
            $reconstrDate = $_POST['reconstr-date-1'];
            $reconstrDateText = $_POST['reconstr-date-1-text'];
            if($reconstrDateText != "") {
                $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $reconstrDateText . '</b>';
            } else {
                $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $reconstrDate . '</b>';
            }
        }
    } elseif ($_POST['service'] == 'Каркасное строительство') {
        $buildType = $_POST['build-type'];
        $mail->Body = $mail->Body . '<br> Выберите дом Вашей мечты: <b> ' . $buildType;
        $buildSize = $_POST['build-size'];
        $buildSizeText = $_POST['build-size-text'];
        if ($buildSizeText != '') {
            $mail->Body = $mail->Body . '</b><br> Укажите размеры будущего строения: <b> ' . $buildSizeText;
        } else {
            $mail->Body = $mail->Body . '</b><br> Укажите размеры будущего строения: <b> ' . $buildSize;
        }
        $buildFoundation = $_POST['build-foundation'];
        $buildDistance = $_POST['build-distance'];
        $buildGift = $_POST['build-gift'];
        $mail->Body = $mail->Body . '</b><br> Укажите тип желаемого фундамента: <b> ' . $buildFoundation . '</b><br> Укажите расстояние от МКАД: <b> ' . $buildDistance . '</b><br> Выберите подарок: <b> ' . $buildGift;
        $buildDate = $_POST['build-date'];
        $buildDateText = $_POST['reconstr-date-text'];
        if($buildDateText != '') {
            $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $buildDateText . '</b>'; 
        } else {
            $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $buildDate . '</b>'; 
        }
    } elseif ($_POST['service'] == 'Ремонт помещений и ландшафтный дизайн') {
        $designType = $_POST['design-type'];
        $designTypeText = $_POST['design-type-text'];
        $mail->Body = $mail->Body . '<br> Выберите объект ремонта: <b> ' . $designType . ' ' . $designTypeText;
        $designElements = $_POST['design-elements'];
        $mail->Body = $mail->Body . '</b><br> Какие элементы требуют ремонта: <b> ' . $designElements;
        $designGift = $_POST['design-gift'];
        $mail->Body = $mail->Body . '</b><br> Выберите подарок: <b> ' . $designGift;
        $designDate = $_POST['design-date'];
        $designDateText = $_POST['design-date-text'];
        if($designDateText != '') {
            $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $designDateText;
        } else {
            $mail->Body = $mail->Body . '</b><br> Укажите срочность начала работ: <b> ' . $designDate;
        }
        $designDistance = $_POST['design-distance'];
        $mail->Body = $mail->Body . '</b><br> Укажите расстояние от МКАД: <b> ' . $designDistance . '</b>';
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail->Body = $mail->Body . '<br> Ваше имя: <b> ' . $name . '</b> <br> Телефон: <b>' . $phone . '</b> <br> Email: <b>' . $email . '</b> <br> Дополнительные пожелания: <b>' . $message . '</b>';

    $mail->AltBody = '';
    $mail->send();
}

?>