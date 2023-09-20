<div class="space"></div>
<footer class="footer mt-5">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="{{ route('home') }}">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="{{route('become.revisor')}}">{{ __('ui.workWithUs')}}</a></li>
      <li class="menu__item"><a class="menu__link" href="{{ route('register') }}">{{ __('ui.registered')}}</a></li>
      <li class="menu__item"><a class="menu__link" href="{{ route('team') }}">Team</a></li>
    </ul>
    <p>&copy;2023 Retro-Hunters.it | All Rights Reserved</p>
</footer>
  