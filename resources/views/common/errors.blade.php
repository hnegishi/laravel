@if (count($errors) > 0)
    <div class='alert alert-danger'>
        <strong>名前が未入力、もしくは255文字までです。</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
