@extends('mobile.templates.main')

@section('content')
    <div class="page page--main" data-page="main">
        @include('mobile.templates.header')

        <!-- PAGE CONTENT -->
        <div class="page__content page__content--with-header page__content--with-bottom-nav">
            <h2 class="page__title">Отправьте нам запрос</h2>
            <p class="welcome">
                Наш специалист ответит Вам в течении дня!
            </p>
            <div class="fieldset">
                <h2 id="Note"></h2>
                <div class="form">
                    <form class="" id="ContactForm" method="post" action="{{ route('mail.store') }}">
                        @csrf
                        <div class="form__row">
                            <input type="text" name="name" value="" class="form__input email required" placeholder="Как к Вам обращаться?">
                        </div>
                        <div class="form__row">
                            <textarea name="text" class="form__textarea required" placeholder="Сообщение"></textarea>
                        </div>

                        <div class="form__row mt-20">
                            <input type="submit" name="submit" class="form__submit button button--main button--full" id="submit" value="Отправить">
                            <label id="loader" style="display:none;"><div id="loader-animation"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></label>
                        </div>
                    </form>
                </div>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="fieldset">
                    <h4 class="mb-0 pb-0">{{ \Illuminate\Support\Facades\Session::get('success') }}</h4>
                </div>
            @endif
            <h2 class="page__title">Способы связи</h2>
            <div class="fieldset">
                <ul class="custom-listing">
                    <li class="email"><span>Email:</span> mail@redaurumcoin.com </li>
                    <li class="phone"><span>Mobile:</span> +4 4203 7699633</li>
                </ul>
            </div>

        </div>
    </div>
@endsection
