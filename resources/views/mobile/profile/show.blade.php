@extends('mobile.templates.main')

@section('content')
    <div class="page page--main" data-page="main">
        <!-- HEADER -->
        <header class="header header--fixed">
            <div class="header__inner">
                <div class="header__icon"><a href="{{ route('m-dashboard') }}"><img src="{{ asset('template-assets/cryptex/images/icons/arrow-back.svg') }}" alt="image" title="image"/></a></div>
            </div>
        </header>

        <form method="post" action="{{ route('my-profile.update', \Illuminate\Support\Facades\Auth::id()) }}">
            @csrf
            {{ method_field('PUT') }}
            <!-- PAGE CONTENT -->
            <div class="page__content page__content--with-header page__content--with-bottom-nav">
                <h2 class="page__title">Мой профиль</h2>
                @csrf
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder pb-0" style="margin-top: 10px;">Email</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" class="form__input" placeholder="" id="rub_input" />
                        </div>
                        <h3 class="mb-0 fw-bolder pb-0" style="margin-top: 30px;">Имя</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" name="name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" class="form__input" placeholder="" id="rub_input" />
                        </div>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Ссылка для приглашения</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" value="" class="form__input" placeholder="{{ config('app.url') }}/register/{{ \Illuminate\Support\Facades\Auth::id() }}" />
                        </div>
                    </div>
                </div>
                @if (\Session::has('success'))
                    <div class="fieldset" style="background: #105f14;">
                        <div class="form">
                            <h3 class="mb-0 fw-bolder pb-0">{!! \Session::get('success') !!}</h3>
                        </div>
                    </div>
                @endif
            </div>
            <!-- PAGE END -->
            <div class="bottom-fixed-button text-center">
                <button class="button button--full button--main" type="submit">Обновить</button>
            </div>
        </form>



    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    {!! $bottomMenu = false !!}
@endsection