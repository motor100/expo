@section('title', 'Главная')

@extends('layouts.main-tr')

@section('style')
  <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
@endsection

@section('content')

<div class="home">

  <div class="main-section">
    <div class="container-xl">
      <div class="main-title _anim-items _anim-no-hide">Elit <span class="accentcolor">yabancı </span><br>gayrimenkul fuarı</div>
      <div class="main-text">Rahatlama ve yatırım için en iyi denizaşırı projeler,<span class="text-bold">Avrupa ve Asya'daki </span> en büyük <br>gayrimenkul fuarı</div>
      <div class="action-btns">
        <button class="main-accent-btn primary-btn js-callback-btn js-callback-btn">DAVET ALIN
          <span class="flash lighting"></span>
        </button>
        <a href="/tr/for-participants" class="become-a-member-btn secondary-btn">ÜYE OL</a>
      </div>
    </div>
    <div class="main-slider-wrapper">
      <div class="main-slider swiper">
        <div class="swiper-wrapper">
          <div class="main-slider-item swiper-slide">
            <img src="/img/main-section-bg.png" alt="">
          </div>
          <div class="main-slider-item swiper-slide">
            <img src="/img/for-participants-bg.png" alt="">
          </div>
          <div class="main-slider-item swiper-slide">
            <img src="/img/poster-bg.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="advantages-section" class="advantages-section section">
    <div class="container-xl">
      <div class="section-title _anim-items _anim-no-hide">Sergi-konferansın<br><span class="accentcolor">avantajları</span></div>
      <div class="flex-container">
        <div class="left">
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-like.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">En iyi geliştiriciler ve emlak acenteleri</div>
              <div class="left-item__text">Önde gelen geliştiriciler ve <span class="accent-text">emlak acenteleriyle tanışma ve tanışma fırsatı</span>. Projelerini görme ve piyasadaki en iyi teklifler hakkında bilgi alma fırsatına sahip olacaksınız. <span class="accent-text">Tanınmış pazar liderlerinden geniş bir</span> seçkin gayrimenkul yelpazesi. Çeşitli teklifleri keşfedebilecek ve ihtiyaçlarınızı ve tercihlerinizi karşılayan mülkleri bulabileceksiniz. Önde gelen firmaların temsilcileriyle temas kurma ve pazarlık yapma fırsatı. İşlem ayrıntılarını tartışabilecek, sorular sorabilecek ve emlak <span class="accent-text">profesyonellerinden uzman tavsiyesi alabileceksiniz</span>.</div>
            </div>
          </div>
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-close.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">Özel ve kapalı projeler</div>
              <div class="left-item__text">Henüz piyasada olmayan yeni projeler hakkında bilgi edinme fırsatı. Emlak piyasasında yeni ortaya çıkan en yeni ve en yenilikçi projeler hakkında bilgi alacaksınız. <span class="accent-text">Özel tekliflere ve kapalı projelere erişim</span>. Serginin bir parçası olarak, genellikle halka açık olmayan tekliflere erişebileceksiniz.</div>
            </div>
          </div>
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-live.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">Canlı katılım ve gösteri</div>
              <div class="left-item__text">Katılımcıların gayrimenkulleri uygulamalı olarak değerlendirmelerine ve deneyimlemelerine olanak tanıyan çeşitli interaktif aktiviteler. Mülkün kalitesi ve özellikleri hakkında fikir edinmek için çeşitli gösteri ve testlere katılabileceksiniz. <span class="accent-text">Gayrimenkul alanındaki yeni teknolojilerin ve yeniliklerin</span> sunumları ve gösterileri.</div>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="right-title">Uluslararası sergi</div>
          <div class="right-text">Ortaklara ve <span class="accent-text">ziyaretçilere benzersiz</span> fırsatlar sunan, sektörün önde gelen etkinlik organizatörleriyiz. <span class="accent-text">Sergimiz potansiyel müşteriler ve ortaklarla tanışmanın yanı sıra</span> gayrimenkul dünyasındaki en son trendleri öğrenmek için ideal bir platformdur.</div>
          <div class="right-blur">
            <img src="/img/advantages-right-blur.png" alt="">
          </div>
          <div class="advantages-right-logo-fragment">
            <img src="/img/advantages-right-logo-fragment.png" alt="">
          </div>
          <div class="advantages-right-logo">
            <img src="/img/advantages-right-logo.svg" alt="">
          </div>
          <div class="right-label">
            <img src="/img/advantages-right-label.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('tr.event-advantages-section')

  <div class="participants-section section">
    <div class="participants-content">
      <div class="container-xl">
        <div class="row">
          <div class="col-xl-7 col-lg-8">
            <div class="section-title _anim-items _anim-no-hide"><span class="accentcolor">Katılımcılar</span></div>
            <div class="participants-description">
              <div class="participants-description-item">
                <div class="participants-description-title-wrapper">
                  <div class="participants-description-item__image">
                    <img src="/img/logo-fragment.svg" alt="">
                  </div>
                  <div class="participants-description-item__title">En iyi şirketler</div>
                </div>
                <div class="participants-description-item__text">Katılımcı firmalar birçok kritere göre iki aşamalı bir seçim sürecinden geçiyor</div>
              </div>
              <div class="participants-description-item">
                <div class="participants-description-title-wrapper">
                  <div class="participants-description-item__image">
                    <img src="/img/logo-fragment.svg" alt="">
                  </div>
                  <div class="participants-description-item__title">Özel projeler</div>
                </div>
                <div class="participants-description-item__text">En eşsiz projeler dünyanın her yerinden tek bir yerde</div>
              </div>
              <div class="participants-description-horizontal-rectangles">
                <img src="/img/participants-description-horizontal-rectangles.png" alt="">
              </div>
              <div class="participants-description-vertikal-rectangles hidden-desktop">
                <img src="/img/participants-description-vertikal-rectangles.png" alt="">
              </div>
            </div>
            <div class="participants-description-underline"></div>
          </div>
          <div class="col-xl-1 d-xl-block d-none"></div>
          <div class="col-xl-4 col-lg-4">
            <div class="participants-counters">
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">1000+</div>
                  <div class="participants-counters-item__text">sergiye katılanlar</div>
                </div>
              </div>
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">15</div>
                  <div class="participants-counters-item__text">ülkeler katılıyor</div>
                </div>
              </div>
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">5400+</div>
                  <div class="participants-counters-item__text">sergideki projeler</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="participants-wrapper">
      <div class="container-xl">
        <div class="participants-cards">
          @foreach($participants as $value)
            @include('tr.participants-item')
          @endforeach
          <div class="participants-last-item">
            <div class="participants-item-content">
              <div class="participants-item-content__logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="participants-item-content__description">İşte etkinliklerimizin düzenli katılımcıları. Tüm katılımcıları görüntülemek için aşağıdaki bağlantıyı takip edin.</div>
              <div class="participants-item-content__see-all">
                <a href="/tr/particpants">Tüm katılımcıları görüntüle</a>
              </div>
            </div>
          </div>
          <div class="participants-logo-fragment">
            <img src="/img/participants-logo-fragment.svg" class="participants-logo-fragment-img" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="participants-bg">
      <img src="/img/participants-bg.png" class="participants-bg-img" alt="">
    </div>
  </div>

  <div class="ticket-section section">
    <div class="labels">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-form.svg" alt="">
              </div>
              <div class="labels-item__title">Formu doldur</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item middle-labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-get.svg" alt="">
              </div>
              <div class="labels-item__title">Bir e-bilet alın</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-show.svg" alt="">
              </div>
              <div class="labels-item__title"><span class="accent">28-29</span> Ekim tarihlerinde sergi girişinde biletinizi gösterin</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ticket-wrapper">
      <div class="container-xl">
        <div class="ticket">
          <div class="ticket-text-string">sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı</div>
          <div class="ticket-logo">
            <img src="/img/logo.svg" alt="">
          </div>
          <div class="ticket-title">Yurtdışında <span class="accent">premium ve <br>business class </span>gayrimenkuller</div>
          <div class="ticket-right-text ticket-date"><span class="accentcolor">28-29 Ekim 2023</div>
          <form class="form callback-form">
            <div class="flex-container">
              <input type="text" name="name" id="ticket-name" class="input-field" required placeholder="Kendinizi tanıtın">
              <input type="text" name="phone" id="ticket-phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
              <input type="email" name="email" id="ticket-email" class="input-field" required placeholder="Email">
              <button type="button" class="callback-submit-btn primary-btn">ELDE ETMEK</button>
            </div>
            <div class="checkbox-wrapper">
              <input type="checkbox" name="ticket-checkbox" id="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal"  checked required>
              <label for="ticket-checkbox" class="custom-checkbox-label"></label>
              <span class="checkbox-text"><a href="/privacy-policy" class="privacy-policy-link" target="_blank">Kullanıcı sözleşmesini kabul ediyorum ve bu sitenin gizlilik politikasını okuyup <br> kabul ettiğimi onaylıyorum.</a></span>
            </div>
          </form>
          <div class="ticket-counter">Sadece sol<br> 1000 yerden <span class="accentcolor">281'i</span></div>
          <div class="ticket-label">
            <img src="/img/ticket-label-desktop.png" class="ticket-label-image ticket-label-desktop-image hidden-mobile" alt="">
            <img src="/img/ticket-label-mobile.png" class="ticket-label-image ticket-label-mobile-image hidden-desktop" alt="">
            <span class="ticket-label-text">elektronik bilet</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('tr.cities-section')

  <div class="slider-section section">
    <div class="container-xl">
      <div class="sn-slider-wrapper">
        <div class="sn-slider swiper">
          <div class="swiper-wrapper">
            @foreach($sliders as $slide)
              <div class="sn-slider-item swiper-slide">
                <img src="{{ Storage::url($slide->image) }}" alt="">
              </div>
            @endforeach
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="sn-slider-logo-fragment sn-slider-logo-fragment-bottom">
          <img src="/img/slider-logo-fragment.svg" alt="">
        </div>
        <div class="sn-slider-logo-fragment sn-slider-logo-fragment-top">
          <img src="/img/slider-logo-fragment.svg" alt="">
        </div>
      </div>
    </div>
    <div class="slider-section-bg">
      <img src="/img/slider-section-bg.png" class="slider-section-bg-img" alt="">
    </div>
  </div>

  @include('tr.description-section')

  <div id="partners-section" class="partners-section section">
    <div class="title-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <div class="section-title _anim-items _anim-no-hide"><span class="accentcolor">Gurur duyuyoruz</span></div>
            <div class="section-title__text">sergimizi tanıtan ve <span class="accent">destekleyen önde gelen medya</span> ortaklarına destek verdiğimizi ve onlarla işbirliği yaptığımızı</div>
          </div>
          <div class="col-md-6">
            <div class="section-title__image">
              <img src="/img/partners-section-wall.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="partners">
      <div class="container-xl">
        <div class="partners-title">Bunlardan bazıları:</div>
        <div class="row">
          <div class="col-lg-4">
            <div class="partners-item">
              <div class="partners-item-number">01</div>
              <div class="vertikal-line"></div>
              <div class="partners-item-title">Dergi<br> <span class="accentcolor">«Gayrimenkul ve inşaat»</span></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="partners-item">
              <div class="partners-item-number">02</div>
              <div class="vertikal-line"></div>
              <div class="partners-item-title">Portal<br> <span class="accentcolor">«Bugün Emlak»</span></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="partners-item">
              <div class="partners-item-number">03</div>
              <div class="vertikal-line"></div>
              <div class="partners-item-title">Ve diğerleri<br> <span class="accentcolor">ünlü yayınlar</span><br>ve internet platformları</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="partners-logo">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('en.callback-section')

</div>

<script>
  const menuItem = 0;
</script>

@endsection

@section('script')
  <script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
@endsection