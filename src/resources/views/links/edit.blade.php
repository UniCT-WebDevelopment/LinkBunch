<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit an existing link
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container">
            <div class="row">
                <div class="col-12 card">
                    <div class="card-body">
                        <h2 class="card-title">Edit link</h2>
                        <form action="/dashboard/links/{{$link->id}}" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Link name</label>
                                        <input type="text" name="name" id="name" class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}" placeholder="My youtube channel" value = {{ $link->name }}>
                                        @if($errors->first('name'))
                                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="link">Link url</label>
                                        <input type="text" name="link" id="link" class="form-control {{ $errors->first('link') ? 'is-invalid' : '' }}" placeholder="https://www.youtube.com/sometext" value = {{ $link->link }}>
                                        @if($errors->first('link'))
                                            <div class="invalid-feedback">{{ $errors->first('link') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Save link</button>
                                    <button type="submit" class="btn btn-secondary" onclick="event.preventDefault(); $('#delete-form').submit()">Delete link</button>
                                </div>
                            </div>
                        </form>
                        <form action="/dashboard/links/{{$link->id}}" method="post" id="delete-form">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>    
</x-app-layout>