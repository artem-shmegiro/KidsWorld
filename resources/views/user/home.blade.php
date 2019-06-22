@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"
                         style="max-width: 900px; margin: 0 auto;">
                        <ol class="carousel-indicators p-2 mb-5">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active shadow-lg p-1 mb-5 bg-white rounded">
                                <div class="item-responsive item-16by9">
                                    <div class="content" style="background: url({{ asset('/home2.jpg') }});"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1><em>ГУО "Ясли-сад г.п. Острино"</em></h1>
                                    </div>
                                </div>
                            </div>
                            @foreach($articles as $article)
                                <div class="carousel-item shadow-lg p-1 mb-5 bg-white">
                                    <div class="item-responsive item-16by9">
                                        <div class="content"
                                             style="background: url({{ asset('/storage/' . $article->image) }});"></div>

                                        <div class="carousel-caption d-none d-md-block">
                                            <a href="{{ route('article', $article) }}"
                                               class="h1 btn btn-outline-light">{{ $article->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev p-2 mb-5" href="#carouselExampleCaptions" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next p-2 mb-5" href="#carouselExampleCaptions" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="accordion shadow-lg p-1 mb-5 bg-white rounded" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    Общая информация
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body" align="justify">
                                Государственное учреждение образования "Ясли-сад г.п.Острино" функционирует с 1979 года.
                                С
                                24.12.2009 года учреждение дошкольного образования получило статус юридического лица
                                Проектная
                                мощность - 85 мест. Фактическая мощность - 85 мест.
                                В учреждении дошкольного образования функционируют 4 группы:
                                - первая младшая (от 2 до 3 лет);
                                - вторая младшая (от 3 до 4 лет);
                                -интегрированная обучения и воспитания детей среднего возраста (от 4 до 5 лет);
                                - интегрированная обучения и воспитания разновозрастная (от 5 до 6 лет)
                                Наш педагогический потенциал: Стаж работы: до 10 лет - 5 педагогов; 20 лет и более - 7
                                педагогов
                                Образование: высшее дошкольное образование - 3 педагога; среднее специальное дошкольное
                                образование - 4 педагога. Аттестация: высшая квалификационная категория-1 педагог,1-ая
                                квалификационная категория - 5 педагогов; 2-ая квалификационная категория - 3 педагога,
                                б/к-3педагога.
                                Целью дошкольного образования является разностороннее развитие и социализация
                                воспитанника
                                раннего и дошкольного возраста в соответствии с его возрастными и индивидуальными
                                возможностями,
                                способностями и потребностями.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Задачи дошкольного образования
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body" align="justify">
                                *охрана и укрепление здоровья ребенка, формирование основ здорового образа жизни;
                                *формирование
                                у воспитанников гуманного отношения к себе и окружающему миру, гуманных взаимоотношений
                                с
                                окружающими; *обеспечение разностороннего развития личности ребенка, а также создание
                                условий
                                для его ранней социализации и саморазвития; *приобщение воспитанников к общечеловеческим
                                ценностям; *взаимодействие с семьей с целью полноценного развития детей и повышения
                                психолого-педагогической культуры родителей; *формирование гражданственности и
                                национального
                                самосознания, патриотических чувств, нравственной, эстетической и экологической
                                культуры;
                                *обеспечение преемственности между дошкольным образованием и первой ступенью общего
                                среднего
                                образования.
                                Наше учреждение дошкольного образования предоставляет следующие дополнительные
                                образовательные
                                услуги:
                                - хореография (от 4 до 6 лет);
                                - ткачество (от 4 до 6 лет);
                                -творческая мастерская (от 4 до 6 лет);
                                Наше учреждение дошкольного образования реализует следующие новые формы дошкольного
                                образования
                                на платной основе: - адаптационная группа кратковременного пребывания; - вечерняя группа
                                кратковременного пребывания "Развитие" (от 4 до 6 лет).
                                В учреждении дошкольного образования функционирует пункт коррекционно-педагогической
                                помощи .
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    График работы
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body" align="justify">
                                Распорядок работы ясли-сада - 10 часов 30 минут в день с 7.30 до 18.00 часов
                                Выходные дни: суббота, воскресенье.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 order-md-2 mb-4">
                <div class="shadow p-2 mb-3 bg-white rounded">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">News</span>
                        <span class="badge badge-secondary badge-pill">{{ $count_articles }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @foreach($articless as $article)
                            <li class="list-group-item justify-content-between lh-condensed text-center">
                                <div>
                                    <h6 class="my-0">{{ $article->title }}</h6>
                                    <small class="text-muted">{{ date("F d, H:i", strtotime($article->updated_at)) }}</small>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection