<p>クリエイター情報更新</p>

<form action="{{ url('mypage_creator_update') }}" method="POST">
    {{ csrf_field() }}
    <label>creator_name:<input type="text" name="creator_name" value="{{ $creator_info->creator_name }}"></label><br>
    <label>birthday:<input type="text" name="birthday" value="{{ $creator_info->birthday }}"></label><br>
    <label>gender:<input type="text" name="gender" value="{{ $creator_info->gender }}"></label><br>
    <label>twitter:<input type="text" name="twitter" value="{{ $creator_info->twitter }}"></label><br>
    <label>instagram:<input type="text" name="instagram" value="{{ $creator_info->instagram }}"></label><br>
    <input type="submit" value="更新">
</form>