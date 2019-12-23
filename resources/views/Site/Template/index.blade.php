<!DOCTYPE html>
<html lang="zxx">
<head>
@includeIf('Site.Template.head')
</head>
<body>
@includeIf('Site.Template.shopCategoryMenu')
@includeIf('Site.Template.mobileMenu')
@includeIf('Site.Template.topBar')
@includeIf('Site.Template.header')
<div class="offcanvas-wrapper">
    @yield('content')
    @includeIf('Site.Template.footer')
</div>
@includeIf('Site.Template.scripts')
</body>
</html>