@section('title', 'Главная')

@extends('layouts.main-ru')

@section('content')

<div class="for-participants">

  <div class="main-section">
    <div class="container-xl">
      <div class="main-title _anim-items _anim-no-hide"><span class="accentcolor">Стань ЭКСПОНЕНТОМ</span> премиальной <br>выставки недвижимости</div>
      <div class="main-text">Оставь заявку прямо сейчас и <span class="accentcolor">мы отправим условия участия в течении 15 минут</span></div>
      <form class="form callback-form">
        <div class="flex-container">
          <input type="text" name="name" class="input-field" required placeholder="Представьтесь">
          <input type="text" name="phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
          <input type="email" name="email" class="input-field" required placeholder="Email">
          <button type="button" class="callback-submit-btn primary-btn">Отправить</button>
        </div>
        <div class="checkbox-wrapper">
          <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="ticket-checkbox" checked required>
          <label for="ticket-checkbox" class="custom-checkbox-label"></label>
          <span class="checkbox-text">Я принимаю пользовательское соглашение и подтверждаю, что ознакомлен<br> и согласен с <a href="/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a> данного сайта.</span>
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
            <div class="section-title _anim-items _anim-no-hide">для экспонентов</div>
            <div class="about">Что такое luxury property expo</div>
            <div class="text">агентства недвижимости и девелоперы, имеющие большой опыт работы и хорошую репутацию на рынке, иммиграционные компании, имеющие собственные представительства в странах по всему миру: <span class="accentcolor">Турции, ОАЭ, Кипра, США, России</span> и многих других стран.</div>
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
              <div class="labels-item__title">Потенциальные покупатели и инвесторы с <span class="accent">бюджетом от 150 000 до 2 млн.</span></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-team.svg" alt="">
              </div>
              <div class="labels-item__title"><span class="accentcolor">Премиум</span> площадка</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-agent.svg" alt="">
              </div>
              <div class="labels-item__title">Представители агентств недвижимости <br>в <span class="accentcolor">сегменте бизнес и премиум класса</span></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-list.svg" alt="">
              </div>
              <div class="labels-item__title">Полезная <span class="accentcolor">деловая программа</span></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-shield.svg" alt="">
              </div>
              <div class="labels-item__title"><span class="accentcolor">Private banking</span> и Family office</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/for-participants-label-networking.svg" alt="">
              </div>
              <div class="labels-item__title">Эффективный <span class="accentcolor">нетворкинг</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="for-participants-text">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <div class="for-participants-text-item for-participants-text-item-first">агентства недвижимости и девелоперы, имеющие большой опыт работы и хорошую репутацию на рынке, иммиграционные компании, имеющие собственные представительства в странах по всему миру: Испании, Греции, Португалии, Таиланда, Кира, ОАЭ и многих других стран.</div>
          </div>
          <div class="col-md-6">
            <div class="for-participants-text-item">агентства недвижимости и девелоперы, имеющие большой опыт работы и хорошую репутацию на рынке, иммиграционные компании, имеющие собственные представительства в странах по всему миру: Испании, Греции, Португалии, Таиланда, Кира, ОАЭ и многих других стран.</div>
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
        <div class="section-title _anim-items _anim-no-hide">Кто посещает<br>выставки <span class="accentcolor">luxury</span><br> property expo</span></div>
      </div>
    </div>

    <div class="visitors-list-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-6 col-md-7">
            <div class="visitors-list">
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Потенциальные клиенты и инвесторы</div>
                <div class="visitors-list-item__text">с бюджетом от 150 000 до 2 млн. евро</div>
              </div>
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Потенциальные клиенты и инвесторы</div>
                <div class="visitors-list-item__text">с бюджетом от 150 000 до 2 млн. евро</div>
              </div>
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Потенциальные клиенты и инвесторы</div>
                <div class="visitors-list-item__text">с бюджетом от 150 000 до 2 млн. евро</div>
              </div>
              <div class="visitors-list-item">
                <div class="visitors-list-item__title">Потенциальные клиенты и инвесторы</div>
                <div class="visitors-list-item__text">с бюджетом от 150 000 до 2 млн. евро</div>
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
        <div class="section-title _anim-items _anim-no-hide"><span class="accentcolor">Рекламная</span> кампания</div>
        <div class="advertising-text">Эффективная методика привлечения покупателей.<br>Все современные возможности интернет рекламы:</div>
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
                <div class="advertising-item-text"><span class="accent">Двухэтапная аутентификация</span> покупателя позволяет привлечь только целевую аудиторию</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-ads.svg" alt="">
                </div>
                <div class="advertising-item-text">Полноценно используем таргетированную рекламу <span class="accent">Facebook, Вконтакте и Instagram*</span></div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-social.svg" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">Работа по подогреву аудитории:</span> ретаргетинг, телеграм-канал, создание интересного контента в соц. сетях</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-telegram.svg" alt="">
                </div>
                <div class="advertising-item-text">Полноценно используем и нативные интеграции в <span class="accent">популярных Telegram-каналах</span></div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-google-yandex.svg" alt="">
                </div>
                <div class="advertising-item-text">Используем самые современные возможности <span class="accent">Яндекс.Директ и Google.Adwords</span></div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-email.svg" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">Email-маркетинг, телемаркетинг, sms-рассылки</span>, размещение информации на сайтах партнеров</div>
              </div>
              <div class="advertising-item">
                <div class="advertising-item-image">
                  <img src="/img/advertising-homes.png" alt="">
                </div>
                <div class="advertising-item-text"><span class="accent">Реклама на порталах PRIAN и Homes Overseas</span> размещениерекламы на крупнейших порталах по зарубежной недвижимсоти</div>
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
      <div class="section-title _anim-items _anim-no-hide">НА НАШЕЙ ВЫСТАВКЕ<br><span class="accentcolor">ПРЕМИАЛЬНЫЕ СТЕНДЫ УЧАСТНИКОВ</span></div>
      <div class="content">
        <div class="logo-fragment">
          <div class="logo-fragment-image">
            <img src="/img/stands-logo-fragment.svg" alt="">
          </div>
          <div class="text">Агентства недвижимости и девелоперы, имеющие большой опыт работы и хорошую репутацию на рынке, иммиграционные компании, имеющие собственные представительства в странах по всему миру: <span class="accentcolor">Испании, Греции, Португалии, Таиланда, Кипра, ОАЭ</span> и многих других стран.</div>
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
              <div class="labels-item__title">Оставьте заявку на<br> участие в выставке</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item middle-labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-get.svg" alt="">
              </div>
              <div class="labels-item__title">С вами свяжется VIP-<br>менеджер и расскажет про условия участия</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-show.svg" alt="">
              </div>
              <div class="labels-item__title">Подпишем документы и<br> начнем готовить ваш<br> стенд к выставке</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ticket-wrapper">
      <div class="container-xl">
        <div class="ticket">
          <div class="ticket-text-string">выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция</div>
          <div class="ticket-logo">
            <img src="/img/logo.svg" alt="">
          </div>
          <div class="ticket-title">ОСТАВЬ ЗАЯВКУ ПРЯМО СЕЙЧАС И<br><span class="accent">СТАНЬ УЧАСТНИКОМ ВЫСТАВКИ</span></div>
          <div class="ticket-right-text ticket-seats-counter">ОСТАЛОСЬ ВСЕГО<br><span class="accent"><span class="accentcolor">17</span> ИЗ 50 МЕСТ</span></div>
          <form class="form callback-form">
            <div class="flex-container">
              <input type="text" name="name" id="ticket-name" class="input-field" required placeholder="Представьтесь">
              <input type="text" name="phone" id="ticket-phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
              <input type="email" name="email" id="ticket-email" class="input-field" required placeholder="Email">
              <button type="button" class="callback-submit-btn primary-btn">ПОЛУЧИТЬ</button>
            </div>
            <div class="checkbox-wrapper">
              <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="ticket-checkbox" checked required>
              <label for="ticket-checkbox" class="custom-checkbox-label"></label>
              <span class="checkbox-text">Я принимаю пользовательское соглашение и подтверждаю, что ознакомлен<br> и согласен с <a href="/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a> данного сайта.</span>
            </div>
          </form>
          <div class="ticket-label">
            <img src="/img/ticket-label-desktop.png" class="ticket-label-image ticket-label-desktop-image hidden-mobile" alt="">
            <img src="/img/ticket-label-mobile.png" class="ticket-label-image ticket-label-mobile-image hidden-desktop" alt="">
            <span class="ticket-label-text">электронный билет</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="rezult-section section">
    <div class="content-wrapper">
      <div class="container-xl">
        <div class="section-title _anim-items _anim-no-hide">Мы уверены, что ваше участие <br>в нашей выставке окупится <br>благодаря нашей <br><span class="accentcolor">ориентированности на результаты</span></div>
        <div class="content">
          <div class="good-deal">
            <!-- <div class="good-deal-bg">
              <img src="/img/good-deal-bg.svg" class="good-deal-bg-img" alt="">
            </div> -->
            <div class="good-deal-text">
              <div class="good-deal-text__top">В среднем, участники достигают</div>
              <div class="good-deal-text__title">
                <div class="number">2-6</div>
                <div class="text"><span class="accent">успешных сделок</span> <br>на выставке</div>
              </div>
              <div class="good-deal-text__subtitle">что обеспечивает <span class="accentcolor">высокую окупаемость <br>вашего участия</span></div>
            </div>
            <div class="good-deal-diagram">
              <img src="/img/good-deal-diagram.svg" alt="">
            </div>
            <div class="good-deal-description">
              <div class="good-deal-description-item">
                <div class="circle">
                  <img src="/img/good-deal-circle-accent.svg" alt="">
                </div>
                <div class="text">Выставка <span class="accent">Luxury Property Expo</span></div>
              </div>
              <div class="good-deal-description-item">
                <div class="circle">
                  <img src="/img/good-deal-circle-grey.svg" alt="">
                </div>
                <div class="text">Другие выставки</div>
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

  @include('callback-section')

</div>

<script>
  const menuItem = 1;
</script>

@endsection