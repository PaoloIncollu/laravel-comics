@php

    $links = [
        [
          'label'=> 'CHARACTER',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'COMICS',
          'url'=> '#',
          'active'=>true

        ],
        [
          'label'=> 'MOVIES',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'TV',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'GAMES',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'COLLECTIBLES',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'VIDEOS',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'FANS',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'NEWS',
          'url'=> '#',
          'active'=>false

        ],
        [
          'label'=> 'SHOP',
          'url'=> '#',
          'active'=>false

        ]

    ];
@endphp

<header>

      <div>

        <div>

          <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">

        </div>

        <ul>

            @foreach ($links as $link )

            <li>

            <a href="#">

              {{ $link['label'] }}

            </a>

          </li>

          @endforeach


        </ul>

      </div>

</header>

