@extends('front.frontp')
@section('title')
    Мои записи
@endsection
@section('content')
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-12">
                    <h2 class="fw-bolder fs-5 mb-4">Мои записи</h2>
                    <!-- News item-->
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ЖК</th>
                            <th>Цена</th>
                            <th>Количество комнат</th>
                            <th>Общая площадь</th>
                            <th>Общая сумма</th>
                            <th>Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user_flats as $k=>$user_flat)
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{ $user_flat->rename }}</td>
                                <td>{{ $user_flat->price }} т.</td>
                                <td>{{ $user_flat->rname }}</td>
                                <td>{{ $user_flat->totalarea }} кв. м</td>
                                <td>{{ ($user_flat->totalarea)*($user_flat->price) }} т.</td>
                                <td><div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $user_flat->stname }}</div></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection
