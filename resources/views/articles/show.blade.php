<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                {{-- carousel start --}}
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    @if ($article->images)
                        <div class="carousel-inner">
                            @foreach ($article->images as $image)
                                <div class="carousel-item @if($loop->first)active @endif">
                                    <img src="{{Storage::url($image->path)}}" class="img-fluid d-block carousel-img" alt="">
                                </div>
                            @endforeach
                        </div>
                    @else 
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/400/300" alt="">
                            </div>
                        </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- carousel end --}}
            </div>
            <div class="col-12 mt-3">
                <h2>
                    {{$article->title}}
                </h2>
            </div>
            <div class="col-12">
                <p>
                    {{$article->body}}
                </p>
                <p>
                    {{__('ui.showArticleDate')}} {{$article->created_at->format('d/m/Y')}}
                </p>
                <p>
                    {{$article->user->name ?? ''}}
                </p>
            </div>
        </div>
    </div>

</x-layout>