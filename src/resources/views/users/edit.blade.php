<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit style bunches
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container">
            <div class="row">
                <div class="col-12 card">
                    <div class="card-body">
                        <h2 class="card-title">Background style</h2>
                        <form action="/dashboard/settings" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="background_color">Background Color</label>
                                        <div class="input-group-append">
                                            <input type="text" id="background_color" name="background_color"
                                                class="form-control{{ $errors->first('background_color') ? ' is-invalid' : '' }}"
                                                placeholder="#ffffff" value="{{ $user->background_color }}">
                                            <input type="color" id="color-picker-background" name="background_color"
                                                style="width: 50px"
                                                class="form-control{{ $errors->first('background_color') ? ' is-invalid' : '' }}"
                                                value="{{ $user->background_color }}">
                                        </div>
                                        @if ($errors->first('background_color'))
                                            <div class="invalid-feedback">{{ $errors->first('background_color') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-title">Button style</h2>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="button_color">Button Color</label>
                                        <div class="input-group-append">
                                            <input type="text" id="button_color" name="button_color"
                                                class="form-control{{ $errors->first('button_color') ? ' is-invalid' : '' }}"
                                                placeholder="#ffffff" value="{{ $user->button_color }}">
                                            <input type="color" id="button_color" name="button_color"
                                                style="width: 50px"
                                                class="form-control{{ $errors->first('button_color') ? ' is-invalid' : '' }}"
                                                value="{{ $user->button_color }}">
                                        </div>
                                        @if ($errors->first('button_color'))
                                            <div class="invalid-feedback">{{ $errors->first('button_color') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="border_width">Border Width</label>
                                        <select class="form-control" id="border_width" name="border_width">
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option value="0px">None</option>
                                            <option value="1px">1px</option>
                                            <option value="2px">2px</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="border_radius">Border Radius</label>
                                        <select class="form-control" id="border_radius" name="border_radius"
                                            value="{{ $user->border_radius }}">
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option value="0px">None</option>
                                            <option value="10px">10px</option>
                                            <option value="25px">25px</option>
                                            <option value="20%">20%</option>
                                            <option value="50%">50%</option>
                                            <option value="70%">70%</option>
                                            <option value="100%">100%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="border_color">Border Color</label>
                                        <div class="input-group-append">
                                            <input type="text" id="border_color" name="border_color"
                                                class="form-control{{ $errors->first('border_color') ? ' is-invalid' : '' }}"
                                                placeholder="#000000" value="{{ $user->border_color }}">
                                            <input type="color" id="border_color" name="border_color"
                                                style="width: 50px"
                                                class="form-control{{ $errors->first('border_color') ? ' is-invalid' : '' }}"
                                                value="{{ $user->border_color }}">
                                        </div>
                                        @if ($errors->first('border_color'))
                                            <div class="invalid-feedback">{{ $errors->first('border_color') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-title">Text style</h2>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="text_color">Text Color</label>
                                        <div class="input-group-append">
                                            <input type="text" id="text_color" name="text_color"
                                                class="form-control{{ $errors->first('text_color') ? ' is-invalid' : '' }}"
                                                placeholder="#ffffff" value="{{ $user->text_color }}">
                                            <input type="color" id="text_color" name="text_color"
                                                style="width: 50px"
                                                class="form-control{{ $errors->first('text_color') ? ' is-invalid' : '' }}"
                                                value="{{ $user->text_color }}">
                                        </div>
                                        @if ($errors->first('text_color'))
                                            <div class="invalid-feedback">{{ $errors->first('text_color') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="text_font">Text font</label>
                                        <select class="form-control" id="text_font" name="text_font">
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option style="font-family: 'Roboto'; font-size: 20px" value="Roboto">
                                                LinkBunch</option>
                                            <option style="font-family: 'Montserrat'; font-size: 20px"
                                                value="Montserrat">LinkBunch</option>
                                            <option style="font-family: 'Dancing Script'; font-size: 25px"
                                                value="Dancing Script">LinkBunch</option>
                                            <option style="font-family: 'Indie Flower'; font-size: 26px"
                                                value="Indie Flower">LinkBunch</option>
                                            <option style="font-family: 'Play'; font-size: 20px" value="Play">LinkBunch
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-primary{{ session('success') ? ' is-valid' : '' }}">Save
                                        Settings</button>
                                    @if (session('success'))
                                        <div class="valid-feedback">{{ session('success') }}</div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
