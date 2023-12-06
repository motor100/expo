@section('title', 'Главная')

@extends('layouts.main-tr')

@section('content')

<div class="for-participants">

  <div class="main-section">
    <div class="container-xl">
      <div class="main-title _anim-items _anim-no-hide"><span class="accentcolor">Birinci sınıf bir emlak</span> <br>fuarının KATILIMCISI olun</div>
      <div class="main-text">Hemen bir talep bırakın <span class="accentcolor">katılım şartlarını 15 dakika içinde göndereceğiz</span></div>
      <form class="form callback-form">
        <div class="flex-container">
          <input type="text" name="name" class="input-field" required placeholder="Kendinizi tanıtın">
          <input type="text" name="phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
          <input type="email" name="email" class="input-field" required placeholder="Email">
          <button type="button" class="callback-submit-btn primary-btn">Отправить</button>
        </div>
        <div class="checkbox-wrapper">
          <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="ticket-checkbox" checked required>
          <label for="ticket-checkbox" class="custom-checkbox-label"></label>
          <span class="checkbox-text"><a href="/privacy-policy" class="privacy-policy-link" target="_blank">Kullanıcı sözleşmesini kabul ediyorum ve bu sitenin gizlilik politikasını okuyup <br>kabul ettiğimi onaylıyorum.</a></span>
        </div>
      </form>
    </div>
  </div>

  <div class="fake-section"></div>

  <div class="for-participants-section section">
    <div class="title-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <div class="section-title _anim-items _anim-no-hide">katılımcılar için</div>
            <div class="about">Lüks mülkiyet fuarı nedir</div>
            <div class="text">Piyasada geniş deneyime ve iyi bir üne sahip emlak acenteleri ve geliştiriciler, dünya çapındaki ülkelerde kendi temsilcilikleri bulunan göçmenlik şirketleri: <span class="accentcolor">Türkiye, BAE, Kıbrıs, ABD, Rusya</span> ve diğer birçok ülke.</div>
          </div>
          <div class="col-md-6">
            <div class="logo-fragment-image">
              <img src="/img/for-participants-logo-fragment.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="labels">
      <div class="container-xl">
        <div class="row">
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-diagram.svg" alt="">
              </div>
              <div class="labels-item__title"><span class="accent">Bütçesi 150.000'den 2 milyona</span> kadar olan <br> potansiyel alıcılar ve yatırımcılar.</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-team.svg" alt="">
              </div>
              <div class="labels-item__title"><span class="accentcolor">Premium</span> platform</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-agent.svg" alt="">
              </div>
              <div class="labels-item__title">Emlak acentelerinin <br><span class="accentcolor">temsilcileri iş ve premium sınıf segmentinde</span></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-list.svg" alt="">
              </div>
              <div class="labels-item__title"><span class="accentcolor">Yararlı iş programı</span></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-shield.svg" alt="">
              </div>
              <div class="labels-item__title"><span class="accentcolor">Özel bankacılık and</span> Aile ofisi</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-networking.svg" alt="">
              </div>
              <div class="labels-item__title">Etkili ağ <span class="accentcolor">oluşturma</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="for-participants-text">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <div class="for-participants-text-item for-participants-text-item-first">Piyasada geniş deneyime ve iyi bir üne sahip emlak acenteleri ve geliştiriciler, dünya çapındaki ülkelerde kendi temsilcilikleri bulunan göçmenlik şirketleri: İspanya, Yunanistan, Portekiz, Tayland, Cyrus, BAE ve diğer birçok ülke.</div>
          </div>
          <div class="col-md-6">
            <div class="for-participants-text-item">Piyasada geniş deneyime ve iyi bir üne sahip emlak acenteleri ve geliştiriciler, dünya çapındaki ülkelerde kendi temsilcilikleri bulunan göçmenlik şirketleri: İspanya, Yunanistan, Portekiz, Tayland, Cyrus, BAE ve diğer birçok ülke.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="for-participants-section-bg">
      <img src="/img/for-participants-section-bg.png" class="for-participants-section-bg-img" alt="">
    </div>
  </div>

  <div class="fake-section"></div>

  <div class="visitors-section section">

    <div class="section-title-wrapper">
      <div class="container-xl">
        <div class="section-title _anim-items _anim-no-hide">Kim ziyaret ediyor<br>fuarlar <span class="accentcolor">luxury<br> property expo</span></div>
      </div>
    </div>

    <div class="visitors-list-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-6 col-md-7">
            <div class="visitors-list">
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Potansiyel müşteriler ve yatırımcılar</div>
                <div class="visitors-list-item__text">150.000 ila 2 milyon euro arası bütçeyle</div>
              </div>
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Potansiyel müşteriler ve yatırımcılar</div>
                <div class="visitors-list-item__text">150.000 ila 2 milyon euro arası bütçeyle</div>
              </div>
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Potansiyel müşteriler ve yatırımcılar</div>
                <div class="visitors-list-item__text">150.000 ila 2 milyon euro arası bütçeyle</div>
              </div>
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Potansiyel müşteriler ve yatırımcılar</div>
                <div class="visitors-list-item__text">150.000 ila 2 milyon euro arası bütçeyle</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-5">
            <div class="percents">
              <div class="percents-item percents-item-first">
                <div class="percents-item__big">70%</div>
                <div class="percent-item__small">buyers</div>
              </div>
              <div class="percents-item">
                <div class="percents-item__big">30%</div>
                <div class="percent-item__small">partners</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="visitors-section-bg-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-7">
            <div class="bg-wrapper">
              <div class="visitors-section-bg">
                <img src="/img/for-participants-visitors-bg.png" class="visitors-section-bg-image" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="advertising-section" class="advertising-section section">
    <div class="section-title-wrapper">
      <div class="container-xl">
        <div class="section-title _anim-items _anim-no-hide"><span class="accentcolor">Reklam</span> kampanyası</div>
        <div class="advertising-text">Müşteri çekmenin etkili bir yöntemi. Tüm modern<br>çevrimiçi reklamcılık fırsatları:</div>
      </div>
    </div>
    <div class="logo-fragment-wrapper hidden-mobile">
      <div class="container-xl">
        <div class="logo-fragment-bg">
          <img src="/img/advertising-logo-fragment.svg" class="logo-fragment-bg-image" alt="">
        </div>
      </div>
    </div>
    <div class="magazine-wrapper hidden-mobile">
      <div class="container-xl">
        <div class="magazine-bg">
          <img src="/img/advertising-magazine.png" class="magazine-bg-image" alt="">
        </div>
      </div>
    </div>
    <div class="advertising-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <div class="advertising">
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-auth.svg" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">İki adımlı alıcı kimlik doğrulaması</span> yalnızca hedef kitlenin ilgisini çekmenize olanak tanır</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-ads.svg" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">Facebook, İnstagram ve Vkontakte</span> tarafından hedeflenen reklamları tam olarak kullanır</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-social.svg" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">İzleyicileri ısıtmak için çalışma:</span> yeniden hedefleme, telgraf kanalı, sosyal medyada ilginç içerikler oluşturma. ağlardan</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-telegram.svg" alt="">
                </div>
                <div class="advertising-item-text">Tamamen kullanıyoruz ve popüler <span class="accent">Telegram kanallarında</span> yerel entegrasyonlar</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-google-yandex.svg" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">Yandex'in</span> en modern özelliklerini <br> <span class="accent">kullanıyoruz.Direct ve Google.Adwords</span></div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-email.svg" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">E-posta pazarlaması, telefonla pazarlama, sms gönderimleri</span>, bilgi gönderme ortakların sitelerinde</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-homes.png" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">PRİAN ve HomesOverseas portallarında reklam verme Yabancı</span> gayrimenkullerin en büyük portallarında reklam yerleştirme</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="logo-magazine-mobile hidden-desktop">
      <div class="logo-fragment-wrapper">
        <div class="container-xl">
          <div class="logo-fragment-bg">
            <img src="/img/advertising-logo-fragment.svg" class="logo-fragment-bg-image" alt="">
          </div>
        </div>
      </div>
      <div class="magazine-wrapper">
        <div class="container-xl">
          <div class="magazine-bg">
            <img src="/img/advertising-magazine.png" class="magazine-bg-image" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="stands-section section">
    <div class="container-xl">
      <div class="section-title _anim-items _anim-no-hide">FUARIMIZDA<br><span class="accentcolor">KATILIMCILARIN PREMIUM STANDLARI</span></div>
      <div class="content">
        <div class="logo-fragment">
          <div class="logo-fragment-image">
            <img src="/img/stands-logo-fragment.svg" alt="">
          </div>
          <div class="text">Piyasada geniş deneyime ve iyi bir üne sahip emlak acenteleri ve geliştiriciler, dünya çapındaki ülkelerde kendi temsilcilik ofisleri bulunan göçmenlik şirketleri: <span class="accentcolor">İspanya, Yunanistan, Portekiz, Tayland, Cyrus, BAE</span> ve diğer birçok ülke.</div>
        </div>
        <div class="stand-image">
          <img src="/img/stand-image.png" alt="">
        </div>
      </div>
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
              <div class="labels-item__title">Sergiye katılmak için <br> bir istek bırakın</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item middle-labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-get.svg" alt="">
              </div>
              <div class="labels-item__title">Bir VIP yöneticisi sizinle iletişime geçecek ve katılım koşulları hakkında bilgi verecektir</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-show.svg" alt="">
              </div>
              <div class="labels-item__title">Belgeleri imzalayıp fuar standınızı hazırlamaya başlayacağız</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ticket-wrapper">
      <div class="container-xl">
        <div class="ticket">
          <div class="ticket-text-string">sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı</div>
          <div class="ticket-logo">
            <img src="/img/logo.svg" alt="">
          </div>
          <div class="ticket-title"><span class="accent">HEMEN TALEP BIRAKIN VE SERGİ</span><br>KATILIMCISI OLUN</div>
          <div class="ticket-right-text ticket-seats-counter">SADECE SOL<br>50 YERDEN<span class="accentcolor">17'Sİ</span></div>
          <form class="form callback-form">
            <div class="flex-container">
              <input type="text" name="name" id="ticket-name" class="input-field" required placeholder="Kendinizi tanıtın">
              <input type="text" name="phone" id="ticket-phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
              <input type="email" name="email" id="ticket-email" class="input-field" required placeholder="Email">
              <button type="button" class="callback-submit-btn primary-btn">GÖNDERMEK</button>
            </div>
            <div class="checkbox-wrapper">
              <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="ticket-checkbox" checked required>
              <label for="ticket-checkbox" class="custom-checkbox-label"></label>
              <span class="checkbox-text"><a href="/privacy-policy" class="privacy-policy-link" target="_blank">Kullanıcı sözleşmesini kabul ediyorum ve bu sitenin gizlilik politikasını okuyup <br> kabul ettiğimi onaylıyorum.</a></span>
            </div>
          </form>
          <div class="ticket-label">
            <img src="/img/ticket-label-desktop.png" class="ticket-label-image ticket-label-desktop-image hidden-mobile" alt="">
            <img src="/img/ticket-label-mobile.png" class="ticket-label-image ticket-label-mobile-image hidden-desktop" alt="">
            <span class="ticket-label-text">elektronik bilet</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="rezult-section section">
    <div class="content-wrapper">
      <div class="container-xl">
        <div class="section-title _anim-items _anim-no-hide">Sonuçlara odaklanmamız sayesinde <br> sergimize katılımınızın karşılığını<span class="accentcolor">alacağınızdan eminiz</span></div>
        <div class="content">
          <div class="good-deal">
            <div class="good-deal-text">
              <div class="good-deal-text__top">Katılımcılar ortalama olarak</div>
              <div class="good-deal-text__title">
                <div class="number">2-6</div>
                <div class="text"><span class="accent">fuarda başarılı</span> <br>işlemler</div>
              </div>
              <div class="good-deal-text__subtitle">katılımınızdan <span class="accentcolor">yüksek getiri sağlar</span></div>
            </div>
            <div class="good-deal-diagram">
              <img src="/img/good-deal-diagram.svg" alt="">
            </div>
            <div class="good-deal-description">
              <div class="good-deal-description-item">
                <div class="circle">
                  <img src="/img/good-deal-circle-accent.svg" alt="">
                </div>
                <div class="text">Sergi <span class="accent">Luxury Property Expo</span></div>
              </div>
              <div class="good-deal-description-item">
                <div class="circle">
                  <img src="/img/good-deal-circle-grey.svg" alt="">
                </div>
                <div class="text">Diğer sergiler</div>
              </div>
            </div>
          </div>
          <div class="image">
            <img src="/img/rezult-image-desktop.png" class="rezult-image-desktop" alt="">
            <img src="/img/rezult-image-mobile.png" class="rezult-image-mobile" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="logo-fragment-wrapper">
      <div class="container-xl">
        <div class="logo-fragment-bg">
          <img src="/img/rezult-logo-fragment.svg" class="logo-fragment-bg-image" alt="">
        </div>
      </div>
    </div>

  </div>

  @include('tr.callback-section')

</div>

<script>
  const menuItem = 1;
</script>

@endsection