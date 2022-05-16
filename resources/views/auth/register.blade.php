@extends('front.frontp')
@section('title')
    Регистрация
@endsection
@section('content')
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h1 class="fw-bolder">Регистрация</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="{{route('auth.register')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}" placeholder="test@enu.edu.kz">
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Пароль</label>
                                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Повторите пароль</label>
                                <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Фамилия</label>
                                <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control {{ $errors->has('lastname') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('lastname'))
                                    <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Имя</label>
                                <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control {{ $errors->has('firstname') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('firstname'))
                                    <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Отчество</label>
                                <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="form-control {{ $errors->has('patronymic') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('patronymic'))
                                    <div class="invalid-feedback">{{ $errors->first('patronymic') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Телефон</label>
                                <input type="text" name="tel" value="{{ old('tel') }}" class="form-control {{ $errors->has('tel') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('tel'))
                                    <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Дата рождения</label>
                                <input type="date" name="birthdate" value="{{ old('birthdate') }}" class="form-control {{ $errors->has('birthdate') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('birthdate'))
                                    <div class="invalid-feedback">{{ $errors->first('birthdate') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ИИН</label>
                                <input type="text" name="iin" value="{{ old('iin') }}" class="form-control {{ $errors->has('iin') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('iin'))
                                    <div class="invalid-feedback">{{ $errors->first('iin') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Адрес</label>
                                <input type="text" name="address" value="{{ old('address') }}" class="form-control {{ $errors->has('address') ? 'is-invalid':'' }}" placeholder="">
                                @if($errors->has('address'))
                                    <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Пол</label>
                                <select name="gender_id" class="form-control {{ $errors->has('gender_id') ? 'is-invalid':'' }}">
                                    <option value="0">Выберите</option>
                                    @foreach($genders as $gender)
                                        <option value="{{ $gender->id }}" {{ old('gender_id')==$gender->id ? 'selected':'' }}>{{ $gender->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('gender_id'))
                                    <div class="invalid-feedback">{{ $errors->first('gender_id') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
