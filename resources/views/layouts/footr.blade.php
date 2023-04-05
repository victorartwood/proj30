<div class="bg-secondary p-5 mt-4 text-light">
    {{-- <div class="row py-5">
        <div class="col-md-7"></div>
        <div class="col-md-5" style="
                    background-image: url( {{ asset('storage/uploads/graduant04.png') }});
                    background-repeat: no-repeat;
                    background-size: 300px;
                    background-attachment: scroll;
                    background-position: top;
                    font-size:10px;
                    height:300px;
                    "></div>
    </div> --}}
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <h5>Why work with us?</h5>
            <p>Doloribus explicabo quis animi aspernatur placeat soluta. Rerum id aut non porro
                in iure autem facere. Fugiat nam officia omnis porro. Enim vel vitae distinctio unde explicabo et vel.
                Iste
                autem quo dolorem aspernatur beatae nesciunt. Doloribus explicabo quis animi aspernatur placeat soluta.
                Rerum id aut non porro
                in iure autem facere. Fugiat nam officia omnis porro.</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <h6>Seller Options</h6>
            <a name="" id="" class="btn btn-sm btn-primary mt-1" href="#" role="button">Create
                task</a>
            <a name="" id="" class="btn btn-sm btn-primary mt-1" href="#" role="button">Open
                tasks</a>
            <a name="" id="" class="btn btn-sm btn-primary mt-1" href="#" role="button">Closed
                tasks</a>
            <a name="" id="" class="btn btn-sm btn-primary mt-1" href="#" role="button">All
                tasks</a>
            <a name="" id="" class="btn btn-sm btn-primary mt-1" href="#" role="button">Other
                Sellers</a>

            <h6 class="pt-2">Buyer Options</h6>
            <a name="" id="" class="btn btn-sm btn-info mt-1" href="#" role="button">Create
                service</a>
            <a name="" id="" class="btn btn-sm btn-info mt-1" href="#" role="button">Open
                services</a>
            <a name="" id="" class="btn btn-sm btn-info mt-1" href="#" role="button">Closed
                services</a>
            <a name="" id="" class="btn btn-sm btn-info mt-1" href="#" role="button">All
                services</a>
            <a name="" id="" class="btn btn-sm btn-info mt-1" href="#" role="button">Other
                Buyers</a>
        </div>
        <div class="col-lg-3 col-md-6"></div>
        <div class="col-lg-3 col-md-6">
            <h4>Subscribe to our news letter</h4>
            <p class="">Fugiat nam officia omnis porro. Enim vel vitae distinctio unde explicabo et vel. </p>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email address"
                        aria-describedby="email">
                </div>
                <div class="d-grid gap-2">
                    <button type="button" name="subscribe" id="subscribe" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
        </div>
        {{--
        <div class="col-lg-3 col-md-3 text-center">
            <a href="#" class="btn text-light">admission essay writing service</a>
            <a href="#" class="btn text-light">analytical essay writing service</a>
            <a href="#" class="btn text-light">apa paper writing service</a>
            <a href="#" class="btn text-light">argumentative essay writing service</a>
            <a href="#" class="btn text-light">book report writing service</a>
            <a href="#" class="btn text-light">buy argumentative essay</a>
            <a href="#" class="btn text-light">buy assignment</a>
            <a href="#" class="btn text-light">buy biology papers</a>
            <a href="#" class="btn text-light">buy capstone project</a>
            <a href="#" class="btn text-light">buy case study</a>
            <a href="#" class="btn text-light">buy coursework</a>
            <a href="#" class="btn text-light">buy custom essay</a>
            <a href="#" class="btn text-light">buy essay online</a>
            <a href="#" class="btn text-light">buy literature essay</a>

        </div>
        <div class="col-lg-3 col-md-3 text-center">
            <a href="#" class="btn text-light">buy literature review</a>
            <a href="#" class="btn text-light">buy narrative essay</a>
            <a href="#" class="btn text-light">buy personal statement</a>
            <a href="#" class="btn text-light">buy persuasive essay</a>
            <a href="#" class="btn text-light">buy research proposal</a>
            <a href="#" class="btn text-light">buy speech</a>
            <a href="#" class="btn text-light">capstone project writing service</a>
            <a href="#" class="btn text-light">case study writing service</a>
            <a href="#" class="btn text-light">coursework help</a>
            <a href="#" class="btn text-light">coursework writing service</a>
            <a href="#" class="btn text-light">descriptive essay writing service</a>
            <a href="#" class="btn text-light">dissertation proposal writing service</a>
            <a href="#" class="btn text-light">do my assignment</a>
            <a href="#" class="btn text-light">do my coursework</a>

        </div>
        <div class="col-lg-3 col-md-3 text-center">
            <a href="#" class="btn text-light">edit my essay</a>
            <a href="#" class="btn text-light">essay for sale</a>
            <a href="#" class="btn text-light">expository essay writing service</a>
            <a href="#" class="btn text-light">literature review writing service</a>
            <a href="#" class="btn text-light">order essay</a>
            <a href="#" class="btn text-light">pay for dissertation</a>
            <a href="#" class="btn text-light">pay for research paper</a>
            <a href="#" class="btn text-light">pay for thesis</a>
            <a href="#" class="btn text-light">personal statement writing service</a>
            <a href="#" class="btn text-light">persuasive essay writing service</a>
            <a href="#" class="btn text-light">powerpoint presentation writing service</a>
            <a href="#" class="btn text-light">rewrite my essay</a>
            <a href="#" class="btn text-light">scholarship essay writing service</a>

        </div>
        <div class="col-lg-3 col-md-3 text-center">
            <a href="#" class="btn text-light">speech writing service</a>
            <a href="#" class="btn text-light">write essays for money</a>
            <a href="#" class="btn text-light">write my argumentative essay</a>
            <a href="#" class="btn text-light">write my assignment</a>
            <a href="#" class="btn text-light">write my book report</a>
            <a href="#" class="btn text-light">write my college essay</a>
            <a href="#" class="btn text-light">write my coursework</a>
            <a href="#" class="btn text-light">write my essay online</a>
            <a href="#" class="btn text-light">write my lab report</a>
            <a href="#" class="btn text-light">write my literature review</a>
            <a href="#" class="btn text-light">write my research paper</a>
            <a href="#" class="btn text-light">write my speech</a>
            <a href="#" class="btn text-light">write my thesis</a>
            <a href="#" class="btn text-light">write my thesis statement</a>
        </div> --}}
    </div>
</div>
