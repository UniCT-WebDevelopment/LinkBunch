<x-links-layout>
    <x-slot name="slot">
        <style>
            body{
                background-color: {{ $user->background_color }};
            }
        </style>
        <div>
            <div class="container">
                <div class="d-flex row justify-content-center">
                    <img class="rounded-circle" width="70" height="70" src="{{ $user->profile_photo_url }}" alt="{{ $user->username }}" />
                </div>
                <div class="row pt-5">
                    <div class="col-12 col-md-6 offset-md-3">
                        @foreach ($user->links as $link)
                                <div class="link">
                                    <a 
                                        href="{{$link->link}}"
                                        data-link-id="{{ $link->id }}"
                                        class="user-link d-block p-3 mb-4 h3 text-center"
                                        target="_blank"
                                        rel="nofollow"
                                        style="border: {{$user->border_width}} solid {{ $user->border_color }}; border-radius: {{$user->border_radius }}; 
                                            color: {{ $user->text_color }}; font-family: {{$user->text_font}}; background-color: {{$user->button_color}}"
                                    >{{ $link->name }}</a>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-links-layout>