<div class="participants-item">
  <div class="participants-item-content">
    <div class="participants-item-content__title">{{ Str::words($value->title, 2, '...') }}</div>
    <div class="participants-item-content__text">{{ $value->desc_tr }}</div>
    <div class="participants-item-content__bg">
      <img src="{{ Storage::url($value->image) }}" alt="">
    </div>
    <div class="participants-item-dark-bg"></div>
  </div>
</div>