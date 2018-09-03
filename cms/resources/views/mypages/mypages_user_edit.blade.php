<p>ユーザー情報編集画面</p>
<form action="{{ url('mypage_creator_update') }}" method="POST">
    {{ csrf_field() }}
    <label>firstname:<input type="text" name="firstname" value="{{ $user_info->firstname }}" required></label><br>
    <label>lastname:<input type="text" name="lastname" value="{{ $user_info->lastname }}" required> </label><br>
    <label>postal_code:<input type="text" name="postal_code" value="{{ $user_info->postal_code }}" required></label><br>
    <label>address:<input type="text" name="address" value="{{ $user_info->address }}" required></label><br>
    <label>tel:<input type="text" name="tel" value="{{ $user_info->tel }}" required></label><br>
    <label>organization:<input type="text" name="organization" value="{{ $user_info->organization }}" required></label><br>
    <input type="submit" value="更新">
</form><br><br>


<p>パスワード/メールアドレス変更：まだ機能は実施しない<br>
    セキュリティの強化時に
</p>
<form action="{{ url('mypage_user_edit') }}" method="POST">
    {{ csrf_field() }}
    <label>password<input type="text" name="password" required></label><br>
    <label>　　email<input type="text" name="email" required></label>
    <input type="submit" value="更新">
</form>