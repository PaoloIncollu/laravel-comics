
<header>

    <div>

        <div>

            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">

        </div>

        <ul>

            @foreach ($menuLinks as $link )

                <li>

                    <a href="#">

                        {{ $link['label'] }}

                    </a>

                </li>

             @endforeach


        </ul>

    </div>

</header>

