<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('ui.modifyArticlePageTitle')}} {{$article->title}}</h2>
                {{-- form start --}}
                <form wire:submit.prevent="store">
                    @csrf
                    {{-- input title start --}}
                    <div class="mb-3">
                        <label class="text-warning" for="title">{{__('ui.createArticleArticleTitle')}}</label>
                        <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{$article->title}}">
                        <div class="text-danger">
                            @error('title')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    {{-- input title end --}}

                    {{-- input body start --}}
                    <div class="mb-3">
                        <label class="text-warning" for="body">{{__('ui.createArticleArticleBody')}}</label>
                        <textarea wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror">{{$article->body}}</textarea>
                        <div class="text-danger">
                            @error('body')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    {{-- input body end --}}

                    {{-- select category start --}}
                    <div class="mb-3">
                        <label class="text-warning" for="category">{{__('ui.createArticleArticleCategory')}}</label>
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">{{$article->category->name}}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- select category end --}}

                    {{-- input images start --}}
                    <div class="mb-3">
                        <label for="images" class="text-warning">
                            {{__('ui.createArticleArticleImages')}}
                        </label>
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="Img">
                        @error('temporary_images.*')
                            <p class="text-danger mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    @if($article->images)
                        <div class="row">
                            <div class="col-12">
                                <p>{{__('ui.createArticleArticleImagesPreview')}}</p>
                                <div class="row border border-4 border-info rounded py-4">
                                    @foreach($article->images as $key => $image)
                                        <div class="col my-3">
                                            <div class="mx-auto rounded" >
                                                <img src="{{Storage::url($image->path)}}" alt="" style="height: 400px; width: 300px">
                                            </div>
                                            
                                            <button type="button" class="btn btn-outline-danger d-block text-center mt-2" wire:click="removeImage({{$key}})">{{__('ui.createArticleArticleDeletePreviewButton')}}</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- input images end --}}

                    {{-- button --}}
                    <button type="submit" class="btn btn-outline-success">{{__('ui.createArticleArticleCreateButton')}}</button>
                </form>
                {{-- form end --}}
            </div>
        </div>
    </div>

</x-layout>