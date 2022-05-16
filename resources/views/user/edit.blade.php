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
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Пользователи</a></li>
                <li class="breadcrumb-item active">Редактирование</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header mb-4">
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Назад</a>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('user.update', $user) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label for="inputName5" class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" id="inputName5" required>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Телефон</label>
                                <input type="text" name="tel" value="{{ old('tel', $user->tel) }}" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Дата рождения</label>
                                <input type="date" name="birthdate" value="{{ old('birthdate', $user->birthdate) }}" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Фамилия</label>
                                <input type="text" name="lastname" value="{{ old('lastname', $user->lastname) }}" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Имя</label>
                                <input type="text" name="firstname" value="{{ old('firstname', $user->firstname) }}" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Отчество</label>
                                <input type="text" name="patronymic" value="{{ old('patronymic', $user->patronymic) }}" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label">ИИН</label>
                                <input type="text" name="iin" value="{{ old('iin', $user->iin) }}" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Пол</label>
                                <select class="form-select" name="gender_id">
                                    @foreach($genders as $gender)
                                        <option value="{{ $gender->id }}" {{ old('gender_id', $user->gender_id)==$gender->id ? 'selected':'' }}>{{ $gender->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Рөлі</label>
                                <select class="form-select" name="role">
                                    <option value="user" {{ old('role', $user->role)=='user' ? 'selected':'' }}>Пользователь</option>
                                    <option value="admin" {{ old('role', $user->role)=='admin' ? 'selected':'' }}>Администратор</option>
                                    <option value="manager" {{ old('role', $user->role)=='manager' ? 'selected':'' }}>Менеджер</option>

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Адрес</label>
                                <input type="text" name="address" value="{{ old('address', $user->address) }}" class="form-control" required>
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
