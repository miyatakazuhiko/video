<p><a href="/">トップページ：index.php</a></p>
<p>動画アップロード</p>
<form action="{{ url('video_add') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label>動画アップロード<input type="file" name="video_file"></label><br>
    <label>動画名前<input type="text" name="video_name"></label><br>
    <label>値段<input type="text" name="price">円</label><br>
    <label>サムネイル<input type="text" name="thumbnail"></label><br>
    <lable>動画説明<textarea name="description"></textarea></lable><br>
    <lable>動画補足<textarea name="supplement"></textarea></lable><br>
    <input type="submit" value="登録"><br>
</form>

<p>動画情報一覧</p>

@foreach ($video_info as $video_info)
<div>
    再生動画： <video controls src="{{ secure_asset($video_info->video_url) }}"　width="100"></video><br>
    <!-- 動画表示が出来ない。 -->
    video:{{ ($video_info->video_url) }}<br>
    video:{{ ($video_info->video_file) }}<br>
    video:{{ ($video_info->video_name) }}<br>
    video_price： {{ $video_info->price }}<br>
    video_thumbnail： {{ $video_info->thumbnail }}<br>
    description： {{ $video_info->description }}<br>
    supplement： {{ $video_info->supplement }}<br>
    <p>---------------------------------------</p>
</div>
@endforeach