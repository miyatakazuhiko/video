<p>ユーザー情報編集画面</p>
<form action="{{ url('mypage_user_edit') }}" method="POST">
    {{ csrf_field() }}
    <label>firstname:<input type="text" name="firstname" value="{{ $user_info->firstname }}" required></label><br>
    <label>lastname:<input type="text" name="lastname" value="{{ $user_info->lastname }}" required> </label><br>
    <label>postal_code:<input type="text" name="postal_code" value="{{ $user_info->postal_code }}" required></label><br>
    <label>address:<input type="text" name="address" value="{{ $user_info->address }}" required></label><br>
    <label>tel:<input type="text" name="tel" value="{{ $user_info->tel }}" required></label><br>
    <label>organization:<input type="text" name="organization" value="{{ $user_info->organization }}" required></label><br>
    <input type="submit" value="更新"></innput>
</form>