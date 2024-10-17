
<footer>

    <div class="container-footer">

        <div class="footer-top">
            <ul>

                @foreach ($listInfo as $item)

                    <li>

                        <div>
                            <img src="{{ Vite::asset('resources/img/'.$item['img'])}}" :alt="{{ $item['label'] }}">
                        </div>

                        <a href="#">

                            {{ $item['label'] }}

                        </a>

                    </li>
                @endforeach
            </ul>

        </div>

        <div class="footer-bottom">


            <div class="footer-bottom-top">

                <div class="container-link-utili">

                    @foreach ($linksComic as $key => $comics )

                        <ul>

                            <h4>
                                {{ $comics['title'] }}
                            </h4>

                            @foreach ($comics['options'] as $option)


                                <li>

                                    <a href="#">

                                        {{$option['option'] }}



                                    </a>


                                </li>
                            @endforeach


                        </ul>

                    @endforeach

                </div>

                <div class="logo-footer">

                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">

                </div>
            </div>


            <div class="container-bg-grey-footer">

                <div class="footer-bottom-bottom">

                <div>

                    <button>SIGN-UP NOW!</button>

                </div>

                <div class="icons-social">

                    @foreach ($listSocial as $key => $social)


                        <ul>

                            <h4>
                                {{ $social['title']}}
                            </h4>


                            @foreach ($social['social'] as $icon)


                                <li>

                                    <a href="#">

                                        <img src="{{ Vite::asset('resources/img/'.$icon['icon'])}}" alt="">


                                    </a>

                                </li>

                            @endforeach

                        </ul>

                    @endforeach
                </div>
            </div>


        </div>
    </div>

</footer>


