@php
    $listInfo = [
        [
        'label'=>'DIGITAL COMICS',
        'img'=>'buy-comics-digital-comics.png'
        ],
        [
          'label'=>'DC MERCHANDISE',
          'img'=>'buy-comics-merchandise.png'
          ],
        [
          'label'=>'SUBSCRIPTION',
          'img'=>'buy-comics-subscriptions.png'
          ],
        [
          'label'=>'COMIC SHOP LOCATOR',
          'img'=>'buy-comics-shop-locator.png'
          ],
        [
          'label'=>'DC POWER VISA',
          'img'=>'buy-dc-power-visa.svg'
          ]
];

      $linkUtili = [
        [
          'title'=>'DC COMICS',
          'options' => [
            [
              'option'=>'Character'
              ],
            [
              'option'=>'Comics'
              ],
            [
              'option'=>'Movies'
              ],
            [
              'option'=>'TV'
              ],
            [
              'option'=>'Games'
              ],
            [
              'option'=>'Videos'
              ],
            [
              'option'=>'News'
              ]


          ]
          ],

        [
          'title'=>'SHOP',
          'options' => [
            [
              'option'=>'Shop DC'
              ],
            [
              'option'=>'Shop DC Collectibles'
              ]


          ]
          ],

        [
          'title'=>'DC',
          'options' => [
            [
              'option'=>'Therms Of Use'
              ],
            [
              'option'=>'Privacy policy (New)'
              ],
            [
              'option'=>'Ad Choices'
              ],
            [
              'option'=>'Advertising'
              ],
            [
              'option'=>'Jobs'
              ],
            [
              'option'=>'Subscriptions'
              ],
            [
              'option'=>'Talent Workshops'
              ],
            [
              'option'=>'CPSC Certicates'
              ],
            [
              'option'=>'Ratings'
              ],
            [
              'option'=>'Shop Help'
              ],
            [
              'option'=>'Contact Us'
              ]


          ]
          ],
        [
          'title'=>'SITES',
          'options' => [
            [
              'option'=>'DC'
              ],
            [
              'option'=>'MAD Magazine'
              ],
            [
              'option'=>'DC Kids'
              ],
            [
              'option'=>'DC Universe'
              ],
            [
              'option'=>'DC Power Visa'
              ]



          ]
          ]


];

      $listSocial = [
        [
          'title'=>'FOLLOW US',
          'social' => [
            [
              'name'=>'Facebook',
              'icon'=>'footer-facebook.png'
              ],
            [
              'name'=>'Twitter',
              'icon'=>'footer-twitter.png'
              ],
            [
              'name'=>'Youtube',
              'icon'=>'footer-youtube.png'
              ],
            [
              'name'=>'Pinterest',
              'icon'=>'footer-pinterest.png'
              ],
            [
              'name'=>'Perinpnscope',
              'icon'=>'footer-periscope.png'
              ]
          ]
          ]
];

@endphp


    <footer>
      <div class="container-footer">
'        <div class="footer-top">
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

                @foreach ($linkUtili as $key => $comics )

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
    </div>


    </footer>


