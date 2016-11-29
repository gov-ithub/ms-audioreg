@if(Auth::user()->isAdmin())
    <li role="presentation" class="{{ active('patients') }}"><a href="{{ route('patients') }}">Cauta pacient</a></li>
@endif

@if(Auth::user()->isDoctor())
    <li role="presentation" class="{{ active('upload_new') }}"><a href="{{ route('upload_new') }}">Încarcă fișier nou</a></li>
    <li role="presentation" class="{{ active('uploads') }}"><a href="{{ route('uploads') }}">Fisiere încărcate</a></li>
@endif