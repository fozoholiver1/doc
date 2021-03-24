<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://www.connectyu.com/themes/wondertag/img/icon.png" type="image/png">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src=" {{ mix('js/app.js') }}" defer></script>
    <x-embed-styles />
    @include('sweetalert::alert')
    @livewireStyles
    @stack('styles')
    @trixassets
</head>
<body class="bg-gray-100 bg-gradient  text-dark">
<livewire:navigation/>
<div >
    {{ $slot }}
</div>
<livewire:item-footer/>
@livewireScripts
@stack('scripts')

<script>
    window.addEventListener('load', function() {
        Trix.config.blockAttributes.heading2 = {
            tagName: 'h2'
            , terminal: true
            , breakOnReturn: true
            , group: false
        }
    })
    addEventListener("trix-initialize", event => {
        const {
            toolbarElement
        } = event.target
        const h1Button = toolbarElement.querySelector("[data-trix-attribute=heading1]")
        h1Button.insertAdjacentHTML("afterend", `
<button type="button" class="trix-button" data-trix-attribute="heading2" title="Heading 2" tabindex="-1" data-trix-active="">H2</button>
`)
    })

    (function() {
        Trix.config.textAttributes.underline = {
            style: { "textDecoration": "underline" },
            inheritable: true,
            parser: function(element) {
                var style = window.getComputedStyle(element);
                return style.textDecoration === "underline";
            }
        }

        var buttonHTML = '<button type="button" class="underline" data-trix-attribute="underline" title="underline">U</button>'
        var groupElement = Trix.config.toolbar.content.querySelector(".text_tools")
        groupElement.insertAdjacentHTML("beforeend", buttonHTML)
    }).call(this);
</script>
</body>
</html>
