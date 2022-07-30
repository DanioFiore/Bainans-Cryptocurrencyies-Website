<x-layout>
    
    <x-slot name="title">Bainans - Home</x-slot>

    @if (session('flash'))
        <div id="flashDivShow" class="alert alert-success d-flex justify-content-between" style="margin-top: 50px">
            {{session('flash')}}
            <button id="closeFlashButton" type="button" class="btn btn-outline-danger">x</button>
        </div>
    @endif

    {{-- title start --}}
    <div id="title">
        <h1 class="text-center" id="homePageH1">
            B A I N A N S
        </h1>
        <h2 class="text-center" id="homePageH2Title">
            We believe in Cryptocurrencies.
        </h2>
        <h6 class="text-center" id="homePageH6Title">
            (Even in the Bear Market)
        </h6>
    </div>
    {{-- title end --}}
    

    {{-- carousel start --}}
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div id="carouselExampleCaptions" class="carousel slide w-50" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/btc2.png" class="d-block w-100" alt="bitcoin">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/eth.png" class="d-block w-100" alt="ethereum">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/terra.png" class="d-block w-100" alt="terra">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
    {{-- carousel end --}}

    {{-- counters start --}}
    <div id="counterId" class="mt-5 opacity-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <h4 class="counterH4first opacity-0">
                    </h4>
                    <p>
                        24h trading volume on Bainans exchange
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <h4 class="counterH4second opacity-0">
                    </h4>
                    <p>
                        Cryptocurrencies listed
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <h4 class="counterH4third opacity-0">
                    </h4>
                    <p>
                        Registered users
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- counters end --}}

    {{-- table crypto start --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="cryptoHomeTable" class="table opacity-0">
                    <thead>
                        <tr>
                            <th class="text-warning" scope="col">Name</th>
                            <th class="text-warning" scope="col">Price</th>
                            <th class="text-warning" scope="col">Vwap24h</th>
                            <th class="text-warning" scope="col">Rank</th>
                            <th class="text-warning" scope="col">Symbol</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        <tr>
                            <td class="text-white">
                                <img class="cryptoTableLogo" src="/img/bitcoin-logo.webp" alt="bitcoin logo">
                                {{ Cryptocap::getSingleAsset('bitcoin')->data->name }}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('bitcoin')->data->priceUsd, 2)}}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('bitcoin')->data->vwap24Hr, 2) }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('bitcoin')->data->rank }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('bitcoin')->data->symbol }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white">
                                <img class="cryptoTableLogo" src="/img/ethereum-logo-2.webp" alt="ethereum logo">
                                {{ Cryptocap::getSingleAsset('ethereum')->data->name }}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('ethereum')->data->priceUsd, 2)}}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('ethereum')->data->vwap24Hr, 2) }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('ethereum')->data->rank }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('ethereum')->data->symbol }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white">
                                <img class="cryptoTableLogo" src="/img/bnb-logo.webp" alt="bitcoin logo">
                                {{ Cryptocap::getSingleAsset('binance-coin')->data->name }}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('binance-coin')->data->priceUsd, 2)}}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('binance-coin')->data->vwap24Hr, 2) }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('binance-coin')->data->rank }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('binance-coin')->data->symbol }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white">
                                <img class="cryptoTableLogo" src="/img/busd-logo.webp" alt="bitcoin logo">
                                {{ Cryptocap::getSingleAsset('binance-usd')->data->name }}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('binance-usd')->data->priceUsd, 2)}}
                            </td>
                            <td class="text-white">
                                {{ number_format(Cryptocap::getSingleAsset('binance-usd')->data->vwap24Hr, 2) }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('binance-usd')->data->rank }}
                            </td>
                            <td class="text-white">
                                {{ Cryptocap::getSingleAsset('binance-usd')->data->symbol }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    {{-- table crypto end --}}

    {{-- start now link start --}}
    @guest
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <h3>Join US to read our latest news about the cryptocurrency world</h3>
                <h6>Or you'll be a dogecoiner..</h6>
                <a class="btn btn-outline-warning mt-2" href="{{route('register')}}">Start now.</a>
            </div>
        </div>
    </div>
    @endguest
    
</x-layout>