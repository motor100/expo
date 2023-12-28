@section('title', 'Contacts')

@extends('layouts.main-en')

@section('content')

<div class="contacts">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Our <span class="accentcolor">contacts</span></div>

      <div class="main-contacts">
        <div class="main-contacts-office">{{ $contacts->title }} Head Office</div>
        <div class="contacts">
          <div class="contacts-item">
            <div class="contacts-item-left">Phone</div>
            <div class="contacts-item-right">{{ $contacts->phone }}</div>
          </div>
          <div class="contacts-item">
            <div class="contacts-item-left">E-mail</div>
            <div class="contacts-item-right">{{ $contacts->email }}</div>
          </div>
          <div class="contacts-item">
            <div class="contacts-item-left">Opening hours</div>
            <div class="contacts-item-right">{{ $contacts->time }}</div>
          </div>
          <div class="contacts-item">
            <div class="contacts-item-left">Address</div>
            <div class="contacts-item-right">{{ $contacts->address_en }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about-section section">
    <div class="title-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="about-title">GENERAL INFORMATION ABOUT THE <br> ORGANIZATION «{{ $contacts->title }}»</div>
          </div>
          <div class="col-md-5">
            <div class="rectangles">
              <img src="/img/contacts-rectangles.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="about-contacts-item">
              <div class="contacts-item-left">Phone</div>
              <div class="contacts-item-right">{{ $contacts->phone }}</div>
            </div>
            <div class="about-contacts-item">
              <div class="contacts-item-left">E-mail</div>
              <div class="contacts-item-right">{{ $contacts->email }}</div>
            </div>
            <div class="about-contacts-item">
              <div class="contacts-item-left">Opening hours</div>
              <div class="contacts-item-right">{{ $contacts->time }}</div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="company-info-item">
              <div class="company-info-item-top">Brand name:</div>
              <div class="company-info-item-bottom">{{ $contacts->title }}</div>
            </div>
            <div class="company-info-item">
              <div class="company-info-item-top">Abbreviated brand name:</div>
              <div class="company-info-item-bottom">{{ $contacts->title_short }}</div>
            </div>
            <div class="company-info-item">
              <div class="company-info-item-top">Legal address:</div>
              <div class="company-info-item-bottom">Stolyarny Lane, Moscow</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="offices-section section">
    <div class="container">
      <div class="offices">
        @foreach($offices as $office)
          <div class="offices-item">
            <div class="office">
              <div class="offices-item__title">Отделение</div>
              <div class="offices-item__text">{{ $office->title_en }}</div>
            </div>
            <div class="address">
              <div class="offices-item__title">Адрес</div>
              <div class="offices-item__text">{{ $office->address_en }}</div>
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

  @include('en.cities-section')

</div>

<script>
  const menuItem = 4;
</script>

@endsection