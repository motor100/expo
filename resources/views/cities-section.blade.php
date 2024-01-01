<div class="cities-section section">
  <div class="cities-section-content">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-4">
          <div class="section-title _anim-items _anim-no-hide">АФИША<br>ВЫСТАВОК<br><span class="accentcolor">В РАЗНЫХ ГОРОДАХ</span></div>
          <div class="cities-section-description">Здесь предоставлены постоянные участники наших мероприятий. Для того, чтобы посмотреть всех участников, перейдите по ссылке ниже.</div>
          <div class="cities-section-see-all">
            <a href="/poster">Смотреть афишу всех городов</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="cities">

            <div class="cities-item-wrapper hidden-mobile">
              <div class="cities-item cities-item-right moscow">
                <div class="cities-item-content">
                  <div class="cities-item-title">Москва</div>
                  <a href="/moscow" class="cities-item-date">
                    <div class="date">{{ $cities[0]->day }} {{ $cities[0]->month }} {{ $cities[0]->year }}</div>
                    <div class="place">{{ $cities[0]->place }}</div>
                  </a>
                </div>
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/moscow" class="cities-item-image__link">
                      <img src="/img/moscow.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cities-item-wrapper hidden-desktop">
              <div class="cities-item cities-item-left moscow">
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/moscow" class="cities-item-image__link">
                      <img src="/img/moscow.png" alt="">
                    </a>
                  </div>
                </div>
                <div class="cities-item-content">
                  <div class="cities-item-title">Москва</div>
                  <a href="/moscow" class="cities-item-date">
                    <div class="date">{{ $cities[0]->day }} {{ $cities[0]->month }} {{ $cities[0]->year }}</div>
                    <div class="place">{{ $cities[0]->place }}</div>
                  </a>
                </div>
              </div>
            </div>

            <div class="cities-item-wrapper hidden-mobile">
              <div class="cities-item cities-item-left saint-petersburg">
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/saint-petersburg" class="cities-item-image__link">
                      <img src="/img/saint-petersburg.png" alt="">
                    </a>
                  </div>
                </div>
                <div class="cities-item-content">
                  <div class="cities-item-title">Санкт-Петербург</div>
                  <a href="/saint-petersburg" class="cities-item-date">
                    <div class="date">{{ $cities[1]->day }} {{ $cities[1]->month }} {{ $cities[1]->year }}</div>
                    <div class="place">{{ $cities[1]->place }}</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="cities-item-wrapper hidden-desktop">
              <div class="cities-item cities-item-right saint-petersburg hidden-desktop">
                <div class="cities-item-content">
                  <div class="cities-item-title">Санкт-Петербург</div>
                  <a href="/saint-petersburg" class="cities-item-date">
                  <div class="date">{{ $cities[1]->day }} {{ $cities[1]->month }} {{ $cities[1]->year }}</div>
                  <div class="place">{{ $cities[1]->place }}</div>
                  </a>
                </div>
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/saint-petersburg" class="cities-item-image__link">
                      <img src="/img/saint-petersburg.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="cities-item-wrapper hidden-mobile">
              <div class="cities-item cities-item-right baku">
                <div class="cities-item-content">
                  <div class="cities-item-title">БАКУ</div>
                  <a href="/baku" class="cities-item-date">
                    <div class="date">{{ $cities[6]->day }} {{ $cities[6]->month }} {{ $cities[6]->year }}</div>
                    <div class="place">{{ $cities[6]->place }}</div>
                  </a>
                </div>
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/baku" class="cities-item-image__link">
                      <img src="/img/baku.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cities-item-wrapper hidden-desktop">
              <div class="cities-item cities-item-left baku">
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/baku" class="cities-item-image__link">
                      <img src="/img/baku.png" alt="">
                    </a>
                  </div>
                </div>
                <div class="cities-item-content">
                  <div class="cities-item-title">БАКУ</div>
                  <a href="/baku" class="cities-item-date">
                    <div class="date">{{ $cities[6]->day }} {{ $cities[6]->month }} {{ $cities[6]->year }}</div>
                    <div class="place">{{ $cities[6]->place }}</div>
                  </a>
                </div>
              </div>
            </div>

            <div class="cities-item cities-item-right northern-cyprus">
              <div class="cities-item-content">
                <div class="cities-item-title">Северный Кипр</div>
                <a href="/northern-cyprus" class="cities-item-date">
                  <div class="date">{{ $cities[5]->day }} {{ $cities[5]->month }} {{ $cities[5]->year }}</div>
                  <div class="place">{{ $cities[5]->place }}</div>
                </a>
              </div>
              <div class="cities-item-circle">
                <div class="cities-item-image">
                  <a href="/northern-cyprus" class="cities-item-image__link">
                    <img src="/img/northern-cyprus.png" alt="">
                  </a>
                </div>
              </div>
            </div>

            <div class="cities-item-wrapper hidden-mobile">
              <div class="cities-item cities-item-right antalya">
                <div class="cities-item-content">
                  <div class="cities-item-title">Анталия</div>
                  <a href="/antalya" class="cities-item-date">
                    <div class="date">{{ $cities[3]->day }} {{ $cities[3]->month }} {{ $cities[3]->year }}</div>
                    <div class="place">{{ $cities[3]->place }}</div>
                  </a>
                </div>
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/antalya" class="cities-item-image__link">
                      <img src="/img/antalya.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cities-item-wrapper hidden-desktop">
              <div class="cities-item cities-item-left antalya">
                <div class="cities-item-circle">
                  <div class="cities-item-image">
                    <a href="/antalya" class="cities-item-image__link">
                      <img src="/img/antalya.png" alt="">
                    </a>
                  </div>
                </div>
                <div class="cities-item-content">
                  <div class="cities-item-title">Анталия</div>
                  <a href="/antalya" class="cities-item-date">
                    <div class="date">{{ $cities[3]->day }} {{ $cities[3]->month }} {{ $cities[3]->year }}</div>
                    <div class="place">{{ $cities[3]->place }}</div>
                  </a>
                </div>
              </div>
            </div>

            <div class="cities-item cities-item-right dubai">
              <div class="cities-item-content">
                <div class="cities-item-title">ДУБАЙ</div>
                <a href="/dubai" class="cities-item-date">
                  <div class="date">{{ $cities[2]->day }} {{ $cities[2]->month }} {{ $cities[2]->year }}</div>
                  <div class="place">{{ $cities[2]->place }}</div>
                </a>
              </div>
              <div class="cities-item-circle">
                <div class="cities-item-image">
                  <a href="/dubai" class="cities-item-image__link">
                    <img src="/img/dubai.png" alt="">
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cities-section-bg">
    <img src="/img/cities-section-bg.png" class="cities-section-bg-img" alt="">
  </div>
</div>