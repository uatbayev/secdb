@extends('back.adminp')
@section('title')
    Добавление
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Қосу</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('recomplex.index') }}">Жилые комплексы</a></li>
                <li class="breadcrumb-item active">Добавление</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header mb-4">
                        <a href="{{ route('recomplex.index') }}" class="btn btn-primary">Назад</a>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('recomplex.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-4">
                                <label class="form-label">Район</label>
                                <select class="form-select" name="district_id">
                                    @foreach($districts as $district)
                                        <option value="{{ $district->id }}" {{ old('district_id')==$district->id ? 'selected':'' }}>{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Тип дома</label>
                                <select class="form-select" name="hometype_id">
                                    @foreach($hometypes as $hometype)
                                        <option value="{{ $hometype->id }}" {{ old('hometype_id')==$hometype->id ? 'selected':'' }}>{{ $hometype->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Этаж</label>
                                <select class="form-select" name="floor_id">
                                    @foreach($floors as $floor)
                                        <option value="{{ $floor->id }}" {{ old('floor_id')==$floor->id ? 'selected':'' }}>{{ $floor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Название</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Цена (кв. м)</label>
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Описание</label>
                                <textarea name="description" class="tinymce-editor">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Фото</label>
                                <input type="file" name="photo" class="form-control" value="{{ old('photo') }}">
                            </div>


                            <div class="row pt-3">
                                <div class="col-4">
                                    <button class="btn btn-primary" type="submit">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
