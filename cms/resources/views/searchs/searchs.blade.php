<p><a href="/">トップページ</a></p>

<form action="{{ url('search_creator') }}" method="POST">
    {{ csrf_field() }}
    <label>ユーザー検索<input type="text" name="creator_name"></label>
    <input type="submit" value="検索">
</form>

@if($search == 1)

<p>検索結果</p>
@foreach( $creator as $creator)
{{ $creator->creator_name }}<br>

@endforeach

@endif