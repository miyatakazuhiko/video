<p><a href="/">トップページ：index.php</a></p>
<p><a href="/video_view">動画一覧表示：videos_view.blade.php</a></p>

<p>動画アップロード</p>
<form action="{{ url('video_add') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @auth
    <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}"> 
    <!-- 本当はuserのidではなく、creator_idで登録-->
    @else
    <input type="hidden" name="creator_id" value="guest">
    @endauth
    <label>動画アップロード<input type="file" name="video_file"></label><br>
    <label>動画名前<input type="text" name="video_name"></label><br>
    <label>値段<input type="text" name="price">円</label><br>
    <label>サムネイル<input type="text" name="thumbnail"></label><br>
    <lable>動画説明<textarea name="description"></textarea></lable><br>
    <lable>動画補足<textarea name="supplement"></textarea></lable><br>
    <input type="submit" value="登録"><br>
</form>