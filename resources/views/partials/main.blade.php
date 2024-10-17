<main>

    <div class="bg-img-main">

    </div>

    <div class="container-cards">

        <button class="my-btn top">

            CURRENT SERIES

        </button>

        <div class="row cards">

            @foreach ($movieCards as $key=> $card)



                <div class="col-12 col-sm-6 col-md-4 col-lg-2 " >

                    <div class="my-card ">

                        <img src="{{ $card['thumb'] }}" alt="{{ $card['series']}}">

                        <div class="my-card-body">

                            <h4>

                                {{ $card['series']}}

                            </h4>

                        </div>


                    </div>

                </div>

            @endforeach

        </div>

        <button class="my-btn bottom">

            LOAD MORE

        </button>

    </div>



</main>

