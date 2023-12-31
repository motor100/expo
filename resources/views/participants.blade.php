@section('title', 'Участники')

@extends('layouts.main-ru')

@section('content')

<div class="participants">

  <div class="main-section">
    <div class="container-xl">
      <div class="main-title _anim-items _anim-no-hide">Встречайте <span class="accentcolor">лидеров рынка</span> -<br> познакомьтесь с застройщиками и компаниями-участниками!</div>
      <div class="main-text">100% обеспеченность активами, прибыль каждые 3 месяца!</div>
      <div class="action-btns">
        <button class="main-accent-btn primary-btn js-callback-btn">ПОЛУЧИТЬ ПРИГЛАШЕНИЕ</button>
        <a href="/for-participants" class="become-a-member-btn secondary-btn">СТАТЬ УЧАСТНИКОМ</a>
      </div>
    </div>
  </div>

  <div id="participants-section" class="participants-section section">
    <div class="title-wrapper">
      <div class="container-xl">
        <div class="section-title _anim-items _anim-no-hide">Участники<br><span class="accentcolor">выставки - конференции</span></div>
      </div>
    </div>

    <div class="participants-description">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-7 col-md-8 order-lg-2">
            <div class="participants-description-text">На нашей выставке представлены <span class="accent">лидеры рынка недвижимости</span>. Познакомьтесь с ведущими застройщиками, которые представят свои <span class="accent">уникальные проекты</span>. Узнайте о компаниях-участниках, которые предлагают широкий спектр услуг и решений в области недвижимости. Наши партнеры, информационные и организационные, поделятся своим опытом и будут рады помочь вам с вашими потребностями. <span class="accent">Присоединяйтесь к нам</span> и встречайте лидеров рынка на нашей выставке!</div>
            <div class="participants-description-counters">
              <div class="participants-description-counters-item">
                <div class="counters-item__number">50+</div>
                <div class="counters-item__text">участников выставки</div>
              </div>
              <div class="participants-description-counters-item">
                <div class="counters-item__number">15</div>
                <div class="counters-item__text">городов представлены</div>
              </div>
              <div class="participants-description-counters-item">
                <div class="counters-item__number">5400+</div>
                <div class="counters-item__text">проектов на выставке</div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-4 order-lg-1">
            <div class="logo-fragments hidden-mobile">
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-white.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-accent.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-white.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-accent.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
              </div>
              <div class="logo-fragments-item logo-fragments-item-hidden">
                <img src="/img/participants-description-logo-fragment-grey.svg" alt="">
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
            @include('participants-item')
          @endforeach
          <div class="participants-last-item">
            <div class="participants-item-content">
              <div class="participants-item-content__logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="participants-item-content__description">Здесь предоставлены постоянные участники наших мероприятий. Для того, чтобы посмотреть всех участников, перейдите по ссылке ниже.</div>
              <div class="participants-last-item-logo-fragment">
                <img src="/img/participants-logo-fragment.svg" class="participants-last-item-logo-fragment-img" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="projects-section" class="projects-section section">
    <div class="title-wrapper">
      <div class="container-xl">
        <div class="section-title _anim-items _anim-no-hide">Проекты<br><span class="accentcolor">выставок-конференций</span></div>
      </div>
    </div>

    <div class="text-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-5">
            <div class="text-item">На нашей выставке представлены <span class="accent">уникальные проекты лидеров рынка недвижимости</span>.</div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5">
            <div class="text-item"><span class="accent">Присоединяйтесь к нам</span> и встречайте лидеров рынка на нашей выставке!</div>
          </div>
        </div>
      </div>
    </div>

    <div class="projects-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-7 col-md-6">
            <div class="projects-item vertical-projects-item">
              <div class="projects-item-content">
                <div class="projects-item-image">
                  <img src="/img/projects-ellington.png" alt="">
                </div>
                <div class="projects-item-about">
                  <div class="projects-item-about__description">
                    <span class="description">Страна:</span>
                    <span class="description-name">Дубай</span>
                  </div>
                  <div class="projects-item-about__description">
                    <span class="description">Проект:</span>
                    <span class="description-name">Коммерческая недвижимость</span>
                  </div>
                </div>
              </div>
              <div class="projects-item-white">
                <div class="projects-item-title">Ellington properties</div>
                <div class="projects-item-description">Элитный застройщик Дубай со своими 6 новыми проектами</div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="projects-item horizontal-projects-item">
              <div class="projects-item-white">
                <div class="projects-item-title">KONAK Construction</div>
                <div class="projects-item-description">Премиальные проекты в Турции, основана с 1987 года</div>
              </div>
              <div class="projects-item-image">
                <img src="/img/projects-ellington.png" alt="">
              </div>
              <div class="projects-item-about">
                <div class="projects-item-about__description">
                  <span class="description">Страна:</span>
                  <span class="description-name">Турция</span>
                </div>
                <div class="projects-item-about__description">
                  <span class="description">Проект:</span>
                  <span class="description-name">Туристическая недвижимость</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="projects-item horizontal-projects-item">
              <div class="projects-item-white">
                <div class="projects-item-title">PRIME PROPERTY</div>
                <div class="projects-item-description">Элитный застройщик северного Кипра, более 237 проектов</div>
              </div>
              <div class="projects-item-image">
                <img src="/img/projects-prime.png" alt="">
              </div>
              <div class="projects-item-about">
                <div class="projects-item-about__description">
                  <span class="description">Страна:</span>
                  <span class="description-name">Кипр</span>
                </div>
                <div class="projects-item-about__description">
                  <span class="description">Проект:</span>
                  <span class="description-name">Жилая недвижимость</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="projects-item vertical-projects-item">
              <div class="projects-item-content">
                <div class="projects-item-image">
                  <img src="/img/projects-kamka.png" alt="">
                </div>
                <div class="projects-item-about">
                  <div class="projects-item-about__description">
                    <span class="description">Страна:</span>
                    <span class="description-name">Россия</span>
                  </div>
                  <div class="projects-item-about__description">
                    <span class="description">Проект:</span>
                    <span class="description-name">Жилая премиум недвижимость</span>
                  </div>
                </div>
              </div>
              <div class="projects-item-white">
                <div class="projects-item-title">KAMKA LUXURY BUILDING</div>
                <div class="projects-item-description">Элитный застройщик Москвы со своими 18 новыми проектами</div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="projects-item vertical-projects-item">
              <div class="projects-item-content">
                <div class="projects-item-image">
                  <img src="/img/projects-ellington.png" alt="">
                </div>
                <div class="projects-item-about">
                  <div class="projects-item-about__description">
                    <span class="description">Страна:</span>
                    <span class="description-name">Дубай</span>
                  </div>
                  <div class="projects-item-about__description">
                    <span class="description">Проект:</span>
                    <span class="description-name">Коммерческая недвижимость</span>
                  </div>
                </div>
              </div>
              <div class="projects-item-white">
                <div class="projects-item-title">Ellington properties</div>
                <div class="projects-item-description">Элитный застройщик Дубай со своими 6 новыми проектами</div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="project-item-last">
              <div class="project-item-last-logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="project-item-last-description">Здесь предоставлены все проекты<br>наших мероприятий.<br>Всего их более 40.</div>
              <div class="project-item-last-logo-fragment">
                <img src="/img/participants-logo-fragment.svg" class="project-item-last-logo-fragment-img" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  const menuItem = 3;
</script>

@endsection