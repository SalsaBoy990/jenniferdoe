<footer class="bg-main-blue-gray h-72 text-white">
    <div>
      <div>Jennifer Doe</div>
        <ul>
            <li>
                <a href="">{{ __('Curriculum vitae (in pdf)') }}</a>
            </li>
            <li>
                <a href="">{{ __('They don’t expect me to repair their children– Interview') }}</a>
            </li>
            <li>
                <a href="">{{ __('Privacy policy (GDPR)') }}</a>
            </li>
        </ul>

        <div>
          <h2>{{ __('Contact') }}</h2>
            <div>{{ __('Call me for appointment:') }}</div>
            <div>{{ $phoneNumber }}</div>
            <div>{{ __('E-mail:') }}</div>
            <div>{{ $emailAddress }}</div>
        </div>

        <nav>
          <a href="">FB</a>
          <a href="">YT</a>
        </nav>
    </div>
    <div>
        <small>{{ __('© Jennifer Doe 2022. All rights reserved.') }}</small>
    </div>
</footer>
