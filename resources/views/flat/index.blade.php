@extends('back.adminp')
@section('title')
    Квартиры
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Квартиры</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                <li class="breadcrumb-item active">Квартиры</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('flat.create') }}" class="btn btn-primary">Добавить</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('info'))
                            <div class="alert alert-primary" role="alert">
                                {{ Session::get('info') }}
                            </div>
                        @endif
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Количество комнат</th>
                                <th scope="col">ЖК</th>
                                <th scope="col">Общая площадь</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($flats as $k=>$flat)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $flat->room->name }}</td>
                                <td>{{ $flat->recomplex->name }}</td>
                                <td>{{ $flat->totalarea }} </td>
                                <td>
                                    <a href="{{ route('flat.edit', $flat) }}" class="btn btn-success"><i class="ri-edit-box-line"></i></a>
                                    <form action="{{ route('flat.destroy', $flat) }}" method="post" style="display: contents">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="ri-delete-bin-3-line"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
