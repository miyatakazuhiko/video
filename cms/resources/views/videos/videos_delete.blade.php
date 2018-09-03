@auth

@isset( Auth::user()->creator_id->creator_id )
<p>この動画を削除しますか？？</p>

タイトル：{{$video_info->video_name}}<br>
<video controls src="{{ secure_asset($video_info->video_url) }}"　width="100"></video><br>
値段：{{ $video_info->price }}円<br>
説明：{{ $video_info->description }}<br>
補足：{{ $video_info->supplement }}<br>


<form action="{{ url('video_destroy_execution') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="video_id" value="{{ $video_id }}" >
    <input type="hidden" name="void" value="1">
    <input type="submit" value="削除">
</form>
    <a href="{{ url('video_info') }}"><button>戻る</button></a>

@else

<p>ログインしてください</p>

@endisset

@endauth