@section('title', 'Контакты')

@extends('layouts.main-ru')

@section('content')

<div class="contacts">

  <div class="main-section">
    <div class="container-xl">
      <div class="main-title _anim-items _anim-no-hide">Наши <span class="accentcolor">контакты</span></div>

      <div class="main-contacts">
        <div class="main-contacts-office">Головной офис<br>«{{ $contacts->title }}»</div>
        <div class="contacts">
          <div class="contacts-item">
            <div class="contacts-item-left">Телефон</div>
            <div class="contacts-item-right">{{ $contacts->phone }}</div>
          </div>
          <div class="contacts-item">
            <div class="contacts-item-left">E-mail</div>
            <div class="contacts-item-right">{{ $contacts->email }}</div>
          </div>
          <div class="contacts-item">
            <div class="contacts-item-left">Часы работы</div>
            <div class="contacts-item-right">{{ $contacts->time }}</div>
          </div>
          <div class="contacts-item">
            <div class="contacts-item-left">Адрес</div>
            <div class="contacts-item-right">{{ $contacts->address_ru }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about-section section">
    <div class="title-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-7">
            <div class="about-title">ОБЩАЯ ИНФОРМАЦИЯ ОБ ОРГАНИЗАЦИИ<br>«{{ $contacts->title }}» </div>
          </div>
          <div class="col-md-5">
            <div class="rectangles hidden-mobile">
              <img src="/img/contacts-rectangles.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-contacts">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-7">
            <div class="about-contacts-item">
              <div class="contacts-item-left">Телефон</div>
              <div class="contacts-item-right">{{ $contacts->phone }}</div>
            </div>
            <div class="about-contacts-item">
              <div class="contacts-item-left">E-mail</div>
              <div class="contacts-item-right">{{ $contacts->email }}</div>
            </div>
            <div class="about-contacts-item">
              <div class="contacts-item-left">Часы работы</div>
              <div class="contacts-item-right">{{ $contacts->time }}</div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="company-info-item">
              <div class="company-info-item-top">Фирменное наименование:</div>
              <div class="company-info-item-bottom">{{ $contacts->title }}</div>
            </div>
            <div class="company-info-item">
              <div class="company-info-item-top">Сокращенное фирменное наименование:</div>
              <div class="company-info-item-bottom">{{ $contacts->title_short }}</div>
            </div>
            <div class="company-info-item">
              <div class="company-info-item-top">Юридический адрес:</div>
              <div class="company-info-item-bottom">{{ $contacts->address_ru }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="offices-section section">
    <div class="container-xl">
      <div class="offices">
        @foreach($offices as $office)
          <div class="offices-item">
            <div class="office">
              <div class="offices-item__title">Отделение</div>
              <div class="offices-item__text">{{ $office->title_ru }}</div>
            </div>
            <div class="address">
              <div class="offices-item__title">Адрес</div>
              <div class="offices-item__text">{{ $office->address_ru }}</div>
            </div>
            <div class="phone">
              <div class="offices-item__title">Телефон</div>
              <div class="offices-item__text">{{ $office->phone }}</div>
            </div>
            <div class="email">
              <div class="offices-item__title">Email</div>
              <div class="offices-item__text">{{ $office->email }}</div>
            </div>
            <div class="working-time">
              <div class="offices-item__title">Время работы</div>
              <div class="offices-item__text">{{ $office->time }}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  @include('cities-section')

</div>

<script>
  const menuItem = 4;
</script>

@endsection