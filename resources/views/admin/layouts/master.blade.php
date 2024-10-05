<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">
<head>
        <meta charset="utf-8" />
                <title>Gemstone | Gemstone - @yield('cardtitle')</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                @include('admin.layouts.link');
    </head>
    <body>
        @include('admin.layouts.header')
        @include('admin.layouts.nav')
        <div class="page-wrapper">
            <div class="page-content">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                @include('admin.layouts.cardtitle')
                                @include('admin.layouts.content')

                            </div>
                        </div>                                                                            
                    </div>
                </div>

            @include('admin.layouts.footer')
            </div>
        </div>

        @include('admin.layouts.script')
    </body>
</html>