<p><a href="/">トップページ：index.php</a></p>
<p><a href="/video">動画アップロード</a></p>

<p>全ての動画情報一覧（voidが1の物も表示）</p>

@foreach ($video_info as $video_info)
<div>
    再生動画： <video controls src="{{ secure_asset($video_info->video_url) }}"　width="100"></video><br>
    <!-- 動画表示が出来ない。 -->
    video_url:{{ ($video_info->video_url) }}<br>
    video_rile:{{ ($video_info->video_file) }}<br>
    creator_id：{{ ($video_info->creator_id) }}<br>
    video_name:{{ ($video_info->video_name) }}<br>
    video_price： {{ $video_info->price }}<br>
    video_thumbnail： {{ $video_info->thumbnail }}<br>
    description： {{ $video_info->description }}<br>
    supplement： {{ $video_info->supplement }}<br>
    void： {{ $video_info->void }}<br>
    <p>---------------------------------------</p>
</div>
@endforeach