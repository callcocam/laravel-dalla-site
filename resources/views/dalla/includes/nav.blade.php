<li class="nav-item {{ (request()->routeIs('dalla.home')) ? 'active' : '' }}">
    <a class="nav-link {{ (request()->is('dalla.home')) ? 'active' : '' }}" href="{{ route('dalla.home') }}">{{ trans('menus.home') }}</a>
</li>
{{--@if (\Route::has('dalla.campaigns.index'))--}}
{{--<li class="nav-item {{ (request()->routeIs('dalla.campaigns.index')) ? 'active' : '' }}">--}}
{{--    <a class="nav-link {{ (request()->routeIs('dalla.campaigns.index')) ? 'active' : '' }}" href="{{ route('dalla.campaigns.index') }}">{{ trans('menus.campaigns') }}</a>--}}
{{--</li>--}}
{{--@endif--}}

{{--@if (\Route::has('dalla.products.index'))--}}
{{--<li class="nav-item {{ (request()->routeIs('dalla.products.index')) ? 'active' : '' }}">--}}
{{--    <a class="nav-link {{ (request()->routeIs('dalla.products.index')) ? 'active' : '' }}" href="{{ route('dalla.products.index') }}">{{ trans('menus.products') }}</a>--}}
{{--</li>--}}
{{--@endif--}}
{{--@if (\Route::has('dalla.events.index'))--}}
{{--<li class="nav-item {{ (request()->routeIs('dalla.events.index')) ? 'active' : '' }}">--}}
{{--    <a class="nav-link {{ (request()->routeIs('dalla.events.index')) ? 'active' : '' }}" href="{{ route('dalla.events.index') }}">{{ trans('menus.events') }}</a>--}}
{{--</li>--}}
{{--@endif--}}
@if (\Route::has('dalla.resellers.index'))
<li class="nav-item {{ (request()->routeIs('dalla.resellers.index')) ? 'active' : '' }}">
    <a class="nav-link {{ (request()->routeIs('dalla.resellers.index')) ? 'active' : '' }}" href="{{ route('dalla.resellers.index') }}">{{ trans('menus.resellers') }}</a>
</li>
@endif
