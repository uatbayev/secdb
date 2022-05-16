@extends('front.frontp')
@section('title')
    Жилые комплексы г.Нур-Султан
@endsection
@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Жилые комплексы г.Нур-Султан</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Европа сити — это комплекс с современной, интересной архитектурой, из самых лучших и качественных материалов и отличной локацией!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('images/kazygurt.jpg') }}" alt="..." /></div>
            </div>
        </div>
    </header>
    <!-- Testimonial section-->
    <div class="py-5 bg-light" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">Корпорация ORDA INVEST — инвестиционно-строительная компания, работающая на рынке строительства жилой и коммерческой недвижимости с 2006 года. Компания успешно ввела множество строительных проектов в Нур-Султане и Алматы: жилые комплексы «Europe Palace I, II», «Orken de luxe I, II, III», «Sultan Apartments», «Asyl Park», «Янтарный», «Vivere», «Асем Тас 1, 2», «Олимпийский», «Liberty» в Нур-Султане, а также элитный коттеджный городок «Тау-Самал» в Алматы. Продажа квартир в ЖК «Europe City» будет осуществляться с соблюдением требований Закона Республики Казахстан «О долевом участии в жилищном строительстве», а именно после возведения каркаса жилого дома и получения разрешения на привлечение денег дольщиков в местном исполнительном органе.</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3" src="{{ asset('images/logo1.png') }}" alt="..." />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
