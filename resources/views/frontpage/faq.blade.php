@extends('front.frontp')
@section('title')
    Вопросы и ответы
@endsection
@section('content')
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Часто задаваемые вопросы</h1>
                <p class="lead fw-normal text-muted mb-0">Мы подготовили для вас ответы на самые часто задаваемые вопросы</p>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- FAQ Accordion 1-->
                    <h2 class="fw-bolder mb-3">Описание программы</h2>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Где расположен квартал, какая там инфраструктура?</button></h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Новостройка находится в самом сердце Уралмаша на перекрестке улиц Донбасская и 22 Партсъезда.

                                    В шаговой доступности все, что нужно детям: до ближайшей школы 300 метров, а в 20 минутах ходьбы расположено 18 детских садов, как государственных, так и частных. Рядом есть кружки и секции по танцам, аква аэробике, теннису, театральному мастерству, пению, логическому развитию, шахматам, журналистике и многому другому. <br>

                                    Транспортная инфраструктура: несколько маршрутов автобуса, трамваев и троллейбусов, 15 минут до метро. Поблизости городские детские и взрослые поликлиники, идти всего 10-15 минут. В первом доме квартала расположены доставка суши, супермаркет «Магнит», магазин «Бристоль», «Строительный двор» и магазин цветов.<br>

                                    ЖК «Белая башня» строят рядом с парком Победы: пробежки, прогулки с коляской, наслаждения природой, чистый воздух, занятия лыжным спортом и ледовые горки. Район ЖК «Белая башня» благодаря близости к парку считается одним из самых удачных для людей, которые ведут активный здоровый образ жизни.<br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Какие материалы и технологии используются при строительстве домов квартала?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Монолитно-каркасная технология строительства, по которой строится квартал, позволяет быстро и качественно возводить надежные дома с высоким сроком службы. Стены состоят из частично-монолитных блоков. Помимо этого ЖК «Белая башня» обладает значимым преимуществом в виде улучшенной шумоизоляции. Предустановленные двухкамерные стеклопакеты защищают от звуков с улицы Донбасская. <br>

                                    Также обеспечить тишину и спокойствие для жителей помогает используемая нами система «плавающего пола». Специальный материал «Пенотерм», который мы укладываем на монолитные плиты, одновременно способен обеспечивать звуко-, тепло- и виброизоляцию. Осознавая, как важен покой и крепкий сон, мы уделяем шумоизоляции особое внимание.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Какая отделка будет у квартир после сдачи дома? Отделка от застройщика?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Чистовая отделка в ЖК «Белая башня» — один из наших поводов для гордости. Создавая квартиры «под ключ», мы тщательно выравниваем стены, пол и потолок. После чего устанавливаем ламинат, клеим обои под покраску и наносим на потолок водоэмульсионный слой. Также переустанавливаются все необходимые счетчики, межкомнатные и входные двери и сантехника с плиткой в ванной. В наше жилье на самом деле можно переехать в день получения ключей. Вам потребуется лишь оформить квартиру на свой вкус.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card border-0 bg-light mt-xl-5">
                        <div class="card-body p-4 py-lg-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="h6 fw-bolder">У вас есть дополнительные вопросы?</div>
                                    <p class="text-muted mb-4">
                                        Контакты:
                                        <br />
                                        87011558877
                                        <br />
                                        <a href="#!">support@enu.edu.kz</a>
                                    </p>
                                    <div class="h6 fw-bolder">Мы в соц.сетях</div>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
