<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Bienvenu Akpo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Une application pour formuler et estimer la ration alimentaire">
    <title>
        Poultry - @yield('title')
    </title>
    @include('admin._partials.link')
    @yield('link')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main">
            @include('admin._partials.sidebar')
            <div class="nk-wrap ">
                @include('admin._partials.header')
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @sectionMissing('navigation')
                                    @include('admin._partials.navigation')
                                @else
                                    @yield('navigation')
                                @endif
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin._partials.footer')
            </div>
        </div>
    </div>

    @yield('modal')
    
    @include('admin._partials.script')
    
    @yield('script')
</body>

</html>
