<?php
function LazyDel()
{

    $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%принтер%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%бензин%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%сканер%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%запасных частей%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лекарств%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%медикамент%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%расходных материал%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%медицинского оборудования%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лифт%' AND client !='ASC3';");

    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%антивирус%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг связи по предоставлению доступа к сети «Интернет»%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по аренде грузовых транспортных средств с водителем%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Услуги лабораторий%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Обслуживание оргтехники%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Выполнение работ по перевозке пассажиров автомобильным транспортом%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка реагентов для пренатального скрининга%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Мазут топочный%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка хозяйственных материалов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка иммуноферментных тест-систем%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по вывозу и утилизации твердых бытовых отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Бактериологические исследования%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка пакетов для автоклавирования%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка наборов реагентов для бактериологической лаборатории%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка химических веществ%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по дератизации и дезинсекции%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка раствора для инфузий%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%медицинской реабилитации застрахованных лиц%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуги водителя%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по предоставлению доступа к сети Интернет%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по предоставлению подвижной (сотовой) радиотелефонной связи%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг почтовой связ%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по техническому (профилактическому) обслуживанию рентгеновского компьютерного томографа%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по вывозу и размещению твердых бытовых отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Бумага для офисной техники%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по обновлению программного обеспечения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по повышению квалификации%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по проведению предрейсовых медицинских осмотров%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лабораторным исследованиям%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по техническому обслуживанию медицинской техники%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по сбору, вывозу и размещению (захоронению) отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг   по  централизованной охране  объекта%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по доставке персонала%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%оказанию услуг по сбору, вывозу и размещению твердых бытовых отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%препаратов для лечения заболеваний нервной системы%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по сбору и транспортировке к месту захоронения и захоронению отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Услуги по обучению специалистов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по сопровождению программного продукта%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%товаров медицинского назначения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%товаров ритуального назначения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%товаров ритуального назначени%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%техническому обслуживанию лабораторного оборудования%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лекартсвенных средст%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка растворов для инфузий%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по делопроизводству%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка противотуберкулезных препаратов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по сбору, транспортировке и захоронению твердых бытовых отходов и крупногабаритного мусора%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка средств индивидуальной защиты%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка изотонического и  лизирующего реагента%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по обучению%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Консультант Плюс%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по проведению предрейсового медицинского осмотра%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%товаров для хозяйственных нужд%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%КонсультантПлюс%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по обязательному страхованию гражданской ответственности%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по стирке постельного белья%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка медицинских растворов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по вывозу и захоронению твердых бытовых отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%дезинфицирующих средств%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Дезинфицирующие средства%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%изделий медицинского назначения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%моющих средств%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%пленки рентгеновской%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%масок медицинских%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%неисключительных прав%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по выполнению бактериологических исследований%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по приему, транспортировке, временному хранению и термическому уничтожению медицинских отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%расходного материала%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%одноразового медицинского инструментария%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по бактериологическим исследованиям%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%канцелярские товары%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%оказание услуг по государственной физической охране объектов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуги по управлению транспортным средством%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Скрининговое ультразвуковое исследование женщин%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Услуги по проведению обязательного периодического медицинского осмотра сотрудников%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%почтовых марок%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%ГСМ%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%мягкого инвентаря%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%горюче смазочных материал%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%горюче-смазочных материал%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%пробирок%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лабораторных исследован%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по физической охране%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение жилого помещения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение жилых помещений%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%канцелярских товаров%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание информационных услуг%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по вывозу твердых бытовых отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по проведению медицинских анализов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по стирке белья%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг охраны%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Покупка нежилого помещения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение в муниципальный жилищный фонд%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание охранных услуг%';");

    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%бумаги%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%шприц%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%планшет%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%картридж%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%семинар%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%протез%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%диагностическ%';"	);
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%регулярных перевозок пассажиров%';"	);
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%проведению периодических осмотров%';"	);
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%периодическом печатном издании%';"	);
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%компьютерной техники%';"	);
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по проведению предрейсовых, послерейсовых медицинских осмотров';");

    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Услуги по охране%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по охране%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по круглосуточной охране%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%спецодежд%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%реагентов для иммунологических исследован%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%диспанцеризац%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг сотовой связи%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%хозяйственно-бытовых принадлежностей%';");
    //$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%печатной продукции%';");
	    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по оздоровлению детей%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по управлению автотранспортными средствами%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Услуги по специальной оценке условий труда%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%дизельное топлив%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%оказание услуг по определению рыночной стоимости%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%расходного материала медицинского назначения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по продаже билетов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по вывозу и утилизации ТБО%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%перчаток%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%нефтепродуктов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%отдыха детей%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%образовательных услуг%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%реактивов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%неисключительной%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%вакцин%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%огнетушител%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%топливо%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%бактерицидные%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%расходные материал%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%иммунобиологических препаратов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение путевок%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по предрейсовым медицинским осмотрам водителей%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по вывозу и утилизации медицинских отходов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по сбору и транспортированию медицинских отходов класса%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по сопровождению программн%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%одноразового белья%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%оказание услуг по охране объектов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%хозяйственных товаров%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение жилых помещений в многоквартирном(ых) доме(ах) %';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%по подписке на периодические печатные издания%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по предоставлению кредитных средств%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%медицинских изделий%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%препарат с международным непатентованным%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%противовирусного препарата%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%подписке и доставке периодических печатных%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Изделия медицинского назначения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг интернет%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Кредитная линия%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%приобретение благоустроенного жилого помещения%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Оказание услуг по предоставлению кредитных ресурсов%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по проведению бактериологических и вирусологических исследований%';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%автомобил%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%древесин%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%транспорт%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение благоустроенной квартиры%' AND client = 'Vologda';");




}
function DropTable(){
    $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
    $mysqli->query ("DELETE FROM `all`;");
}
function add($arr_final,$Fname)
{
    $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
    for ($j=0;$j<count($arr_final);$j++)
    {

        $mysqli->query("INSERT INTO `all` (`link`,`client`,`date_ann`,`finance_source`,`type`,`order`,`cost`,`city`)  VALUES ('{$arr_final[$j][0]}','{$Fname}','{$arr_final[$j][2]}','{$arr_final[$j][3]}','{$arr_final[$j][4]}','{$arr_final[$j][6]}','{$arr_final[$j][7]}','{$arr_final[$j][5]}');");
    }

    $mysqli->close();

}
function select()
{

    $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'Закупка у единственного поставщика';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'Закупка у единственного поставщика (подрядчика, исполнителя)';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'СБ-АСТ: Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'СБ: Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'Закупка у единственного поставщика (подрядчика, исполнителя) с учетом положений ст. 111 Закона № 44-ФЗ';");
    LazyDel();
    $mysqli->query ("DELETE FROM `all` WHERE `link` = '';");
    $sql="SELECT * FROM `all`";
    $res = mysqli_query($mysqli,$sql);
    while($user = mysqli_fetch_assoc($res))
    {
        $tender[]=$user;
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
    DbExport($tender);
}
function LazyDelKostroma()
{

    $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%принтер%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%бензин%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%сканер%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%запасных частей%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%лекарств%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%медикамент%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%расходных материал%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%медицинского оборудования%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%лифт%' AND client !='ASC3';");

    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%антивирус%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%ГСМ%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по оздоровлению детей%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по управлению автотранспортными средствами%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Услуги по специальной оценке условий труда%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%дизельное топлив%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%оказание услуг по определению рыночной стоимости%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%расходного материала медицинского назначения%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по продаже билетов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по вывозу и утилизации ТБО%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%горюче смазочных материал%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%горюче-смазочных материал%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%пробирок%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%лабораторных исследован%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%услуг по физической охране%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Приобретение жилого помещения%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Приобретение жилых помещений%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%канцелярских товаров%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание информационных услуг%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по вывозу твердых бытовых отходов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по проведению медицинских анализов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по стирке белья%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг охраны%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Покупка нежилого помещения%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Приобретение в муниципальный жилищный фонд%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание охранных услуг%';");

    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%бумаги%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%шприц%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%планшет%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%картридж%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%семинар%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%протез%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%диагностическ%';"	);
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%регулярных перевозок пассажиров%';"	);
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%проведению периодических осмотров%';"	);
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%периодическом печатном издании%';"	);
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%компьютерной техники%';"	);
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по проведению предрейсовых, послерейсовых медицинских осмотров';");

    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Услуги по охране%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%услуг по охране%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%услуг по круглосуточной охране%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%спецодежд%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%реагентов для иммунологических исследован%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%диспанцеризац%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%услуг сотовой связи%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%хозяйственно-бытовых принадлежностей%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%печатной продукции%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%перчаток%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%нефтепродуктов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%отдыха детей%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%образовательных услуг%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%реактивов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%неисключительной%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%вакцин%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%огнетушител%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%топливо%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%бактерицидные%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%расходные материал%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%иммунобиологических препаратов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по вывозу и утилизации медицинских отходов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по сбору и транспортированию медицинских отходов класса%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по сопровождению программн%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%одноразового белья%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%оказание услуг по охране объектов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%хозяйственных товаров%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Приобретение жилых помещений в многоквартирном(ых) доме(ах) %';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%по подписке на периодические печатные издания%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%медицинских изделий%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%препарат с международным непатентованным%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%противовирусного препарата%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%подписке и доставке периодических печатных%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Изделия медицинского назначения%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%услуг интернет%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Кредитная линия%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%приобретение благоустроенного жилого помещения%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Оказание услуг по предоставлению кредитных ресурсов%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%услуг по проведению бактериологических и вирусологических исследований%';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Поставка%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%автомобил%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%древесин%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%транспорт%' AND client = 'Vologda';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `order` LIKE '%Приобретение благоустроенной квартиры%' AND client = 'Vologda';");




}