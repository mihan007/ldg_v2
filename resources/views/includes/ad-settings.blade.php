<div class="col-md-12 font-weight-bold subcategory-settings-wrapper border-bottom mb-3">
    <a class="btn directory-button @if($step=='ad') active @endif" href="{{ route('settings.ad-yandex') }}">Яндекс.Директ</a>
    <a class="btn directory-button @if($step=='google') active @endif" href="{{ route('settings.ad-google') }}">Google.Ads</a>
    <a class="btn directory-button @if($step=='roistat') active @endif" href="{{ route('settings.ad-roistat') }}">Roistat</a>
</div>
