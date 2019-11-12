<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}" prefix="og: http://ogp.me/ns#">
@section('htmlheader')
    @include('pub_theme::layouts.partials.htmlheader')
@show

<body class="{{ isset($body_class)?$body_class:'' }}" >
	@yield('body')

	@section('scripts')
    	@include('pub_theme::layouts.partials.scripts')
	@show
	
</body>
</html>
{{-- 
{{ \xdebug_print_function_stack( '['.__LINE__.']['.__FILE__.']' ) }}
--}}