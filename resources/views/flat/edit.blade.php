@extends('back.adminp')
@section('title')
    Редактирование
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Редактирование</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('flat.index') }}">Квартиры</a></li>
                <li class="breadcrumb-item active">Редактирование</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header mb-4">
                        <a href="{{ route('flat.index') }}" class="btn btn-primary">Назад</a>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('flat.update', $flat) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label class="form-label">Количество комнат</label>
                                <select class="form-select" name="room_id">
                                    @foreach($rooms as $room)
                                        <option value="{{ $room->id }}" {{ old('room_id', $flat->room_id)==$room->id ? 'selected':'' }}>{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">ЖК</label>
                                <select class="form-select" name="recomplex_id">
                                    @foreach($recomplexes as $recomplex)
                                        <option value="{{ $recomplex->id }}" {{ old('recomplex_id', $flat->recomplex_id)==$recomplex->id ? 'selected':'' }}>{{ $recomplex->name }} - {{ $recomplex->district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Общая площадь (кв. м)</label>
                                <input type="text" name="totalarea" value="{{ old('totalarea', $flat->totalarea) }}" class="form-control" required>
                            </div>
                            <div class="row pt-3">
                                <div class="col-4">
                                    <button class="btn btn-primary" type="submit">Изменить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

