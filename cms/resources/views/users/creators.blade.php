<p><a href="/">トップページ：index.php</a></p>
<p>クリエイター情報登録</p>
<form action="{{ url('creators_add') }}" method="POST">
    {{ csrf_field() }}
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


<p>ユーザー情報</p>
@foreach ($creator_info as $info)
<div>
    まとめてﾄﾞｰﾝ：{{ $info->getCreator_info() }}<br>
    Creater_name： {{ $info->creator_name }}<br>
    Creater_birthday：　{{ $info->birthday }}<br>
    Creater_gender：　{{ $info->gender }}<br>
    Creater_twitter：　{{ $info->twitter }}<br>
    Creater_instagram：　{{ $info->instagram }}<br>
    <p>----------------------------</p>
</div>
@endforeach

<!--@foreach ($user_info as $user)-->
<!--<div>-->
<!--    User_ID：　{{ $user->id }}<br>-->
<!--    User_firstname：　{{ $user->firstname }}<br>-->
<!--    User_lastname：　{{ $user->lastname }}<br>-->
<!--    User_Pass：　{{ $user->password }}<br>-->
<!--    User_email：　{{ $user->email }}<br>-->
<!--    User_tel：　{{ $user->tel }}<br>-->
<!--    User_postal_code：　{{ $user->postal_code }}<br>-->
<!--    User_address：　{{ $user->address }}<br>-->
<!--    User_organization：　{{ $user->organization }}<br>-->
<!--    <p>-----------------------------------</p>-->
<!--</div>-->
<!--@endforeach-->