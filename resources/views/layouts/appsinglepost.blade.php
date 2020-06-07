<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
<body>
    @include('layouts.navigation')

    <main class="mt-5 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-4">
                    @include('layouts.contentpost')
                    {{-- Untuk halaman --}}
                    @include('layouts.pagination')
                </div>
                {{-- Untuk widget sebelah kanan page --}}
                <div class="col-md-4">
                    @include('layouts.widgets.searchwidget')
                    {{-- untuk kategories --}}
                    @include('layouts.widgets.categorieswidget')
                    {{-- Related article  --}}
                    @include('layouts.widgets.relatedarticleswidget')
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer font-small indigo pt-4 mt-4">
        @include('layouts.footer')
    </footer>
</body>
@include('layouts.appscripts')
</html>
