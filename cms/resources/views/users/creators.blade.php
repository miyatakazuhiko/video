<p><a href="/">トップページ：index.php</a></p>
<p>クリエイター情報登録</p>
@auth
<p>ログインしています：{{ Auth::user()->firstname }}さん</P>
@endauth


@auth
value="{{ Auth::user()->creator_id }}"<br>
<!--ユーザーがクリエイターIDを2つ以上持たないようにする！！！-->

    @isset( Auth::user()->creator_id->creator_id )

    <p>あなたのクリエイター情報です</p>

    @else

    <form action="{{ url('creators_add') }}" method="POST">
        {{ csrf_field() }}
        @auth
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        @else
        <input type="hidden" name="user_id" value="guest">
        @endauth
        <label>クリエイターID：<input type="text" name="creator_name"></label><br>
        <label>　　　　誕生日：<input type="text" name="birthday"></label> <br>
        <label>　　　　　性別：
            <input type="radio" name="gender" value="男性">男性
            <input type="radio" name="gender" value="女性">女性
        </label><br>
        <label>　　　 Twitter：<input type="text" name="twitter"></label><br>
        <label>　　 Instagram：<input type="text" name="instagram"></label><br>
        <input type="submit" value="登録">
    </form>

    @endisset

@endauth


<p>ユーザー情報</p>
@foreach ($creator_info as $info)
<div>
    <!--まとめてﾄﾞｰﾝ：{{ $info->getCreator_info() }}<br>-->
    Creator_user_id： {{ $info->user_id }}<br>
    Creator_id：{{ $info->creator_id }}<br>
    Creater_name： {{ $info->creator_name }}<br>
    Creater_birthday：　{{ $info->birthday }}<br>
    Creater_gender：　{{ $info->gender }}<br>
    Creater_twitter：　{{ $info->twitter }}<br>
    Creater_instagram：　{{ $info->instagram }}<br>
    <p>----------------------------</p>
</div>
@endforeach

@foreach ($user_info as $user)
<div>
    User_ID：　{{ $user->id }}<br>
    User_firstname：　{{ $user->firstname }}<br>
    User_lastname：　{{ $user->lastname }}<br>
    User_Pass：　{{ $user->password }}<br>
    User_email：　{{ $user->email }}<br>
    User_tel：　{{ $user->tel }}<br>
    User_postal_code：　{{ $user->postal_code }}<br>
    User_address：　{{ $user->address }}<br>
    User_organization：　{{ $user->organization }}<br>
    {{$user->creator_id}}
    <p>-----------------------------------</p>
</div>
@endforeach