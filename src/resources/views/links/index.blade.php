<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Links
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container">
            <div class="row">
                <div class="col-12 card">
                    <div class="card-header bg-white">
                        <h2 class="card-title">Your Links</h2>
                        <a href="{{ route('show', Auth::user()->username) }}">
                            {{ route('show', Auth::user()->username) }}</a>
                    </div>
                    <div class="card-body">
                        @foreach ($links as $link)
                            <div class="card bg-light my-2" style="border-radius: 10px">
                                <div class="card-body">
                                    <div class="row w-100">
                                        <div class="col-lg-2 col-md-2">
                                            <strong>Name</strong>
                                            <p>{{ $link->name }}</p>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-12">
                                            <strong>Url</strong>
                                            <p><a href="{{ $link->link }}">{{ $link->link }}</a></p>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-12">
                                            <strong>Visits</strong>
                                            <p>{{ $link->visits_count }}</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12">
                                            <strong>Last Visit</strong>
                                            <p>{{ $link->latest_visit ? $link->latest_visit->created_at->format('j M Y - H:m:s') : 'N/A' }}
                                            </p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12">
                                            <strong>Action</strong>
                                            <p><a href="/dashboard/links/{{ $link->id }}">Edit</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <a href="/dashboard/links/new" class="btn btn-primary my-2">Add Link</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
