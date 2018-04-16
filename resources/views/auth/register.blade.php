@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-6 col-md-4" >
            <div class="card card-body bg-light">
                <h3>Регистрация</h3>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Имя</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Э-почта</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for="area" class="col-md-4 control-label">Область</label>

                            <div class="">
                                <select name="area" id="area" class="form-control" value="{{ old('area') }}">
                                    <option></option>
                                    <option value="Белгородская область">Белгородская область</option>
                                    <option value="Брянская область">Брянская область</option>
                                    <option value="Владимирская область">Владимирская область</option>
                                    <option value="Воронежская область">Воронежская область</option>
                                    <option value="Ивановская область">Ивановская область</option>
                                    <option value="Калужская область">Калужская область</option>
                                    <option value="Костромская область">Костромская область</option>
                                    <option value="Курская область">Курская область</option>
                                    <option value="Липецкая область">Липецкая область</option>
                                </select>

                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Номер телефона</label>

                            <div class="">
                                
                                <input id="phone" type='tel' pattern='\d{1} \d{3} \d{3}[\-]\d{2}[\-]\d{2}' title='Номер телефона (Формат: 7 912 345-67-89)' placeholder="7 912 345-67-89" class="form-control" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('пароль') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Повтор пароля</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
        </div>
    </div>

            
                
               
@endsection
