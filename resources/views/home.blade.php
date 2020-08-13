@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fdac24-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fdac24-1.fna.fbcdn.net&_nc_ohc=Gq7OjltKEIkAX86ibTp&oh=4ad540de184b0b33b722f1bf4b8b8daa&oe=5F5E8967" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>freeCodeGram</h1></div>
            <div class="d-flex">
                <div class="pr-5"> <strong>230</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>210</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeGram.org</div>
            <div><p>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</p></div>
            <div> <a href="#">www.freecodegram.org</a> </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fdac24-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=instagram.fdac24-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=gJwN-gzhtz0AX9cxuaz&oh=cb072bcf9f9428b63460c9ae680914e6&oe=5F5DEA02" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac24-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117185734_730508550844355_4827964239716308767_n.jpg?_nc_ht=instagram.fdac24-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=n0VgYU4dhFQAX-2Nfv-&oh=fd01c598df527e283539eb264924379a&oe=5F5EA34E" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac24-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.117.937.937a/s640x640/116792589_940704333073490_3603561987847571728_n.jpg?_nc_ht=instagram.fdac24-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=OR5xOJe4kjIAX-Za785&oh=a7cd74b1591276ffe75d6856a605357f&oe=5F6065B3" class="w-100">
        </div>
    </div>
</div>
@endsection
