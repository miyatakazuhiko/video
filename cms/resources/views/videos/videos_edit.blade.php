@auth

@isset( Auth::user()->creator_id->creator_id )

<form action="{{ url('video_update') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="video_id" value="{{ $video->video_id }}" >
    <label>タイトル：<input type="text" name="video_name"></label><br>
    <label>　　値段：<input type="text" name="price">円</label><br>
    <label>　　説明：<input type="text" name="description"></label><br>
    <label>　　補足：<input type="text" name="supplement"></label><br>
    <input type="submit" value="更新">
</form>

@else

<p>ログインしてください</p>

@endisset

@endauth