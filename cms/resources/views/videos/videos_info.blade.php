<p><a href="/">トップページ：index.php</a></p>
@auth

あなたのクリエイターID：{{ Auth::user()->creator_id->creator_id }}

<p>動画登録してないときにもエラーが起きないように。</p>


<p>あなたの動画一覧</p>
@foreach($video as $info)

タイトル：{{$info->video_name}}<br>
<video controls src="{{ secure_asset($info->video_url) }}"　width="100"></video><br>
値段：{{ $info->price }}円<br>
説明：{{ $info->description }}<br>
補足：{{ $info->supplement }}<br>
<!--更新-->
<form action="{{ url('video_edit/'.$info->video_id) }}" method="GET">
    <input type="submit" value="更新">
</form>

<form action="{{ url('video_delete/'.$info->video_id) }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" value="{{$info->video_id}}">
    <input type="submit" value="削除">
</form>
    
<p>-----------------------------------------------------------------------</p>
@endforeach
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        {{ $video->links()}}
        </div>
    </div>


@else

    <h1>ログインしてください。</h1>

@endauth