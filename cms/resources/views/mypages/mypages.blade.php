<p><a href="/">トップページ</a></p>

@auth
<div>
    <li>ユーザー情報</li>
    @foreach( $user_info as $user_info )
    <table>
        <tr>
            <th>firstname：{{ $user_info->firstname }}</th>
            <th>lastname: {{ $user_info->lastname }}</th>
            <th>email：{{ $user_info->email }}</th>
        </tr>
        <tr>
            <th>postal_code: {{ $user_info->postal_code }}</th>
            <th>address: {{ $user_info->address }}</th>
            <th>tel: {{ $user_info->tel }}</th>
            <th>organization: {{ $user_info->organization }}</th>
        </tr>
    </table>
    @endforeach
    <!--別ページ-->
    <a href="/mypage_user"><button>ユーザー情報編集</button></a>
    <li>---------<a href="/">口座登録/編集</a></li>
    <!------------>
</div><br>


<div>
    <li>お気に入りユーザー</li>
    <li>お気に入り動画</li>
</div><br>

<!--別ページ-->
<div>
    <li><a href="/">ショッピングカート</a></li>
    <li><a href="/">購入済み動画</a></li>
    <li>---------<a href="/">ライセンス登録/確認</a></li>
    <li><a href="/">購入済みクリエイターツール</a></li>
</div><br>
<!------------>


@isset( Auth::user()->creator_id )
<div>
    <li>クリエイター情報</li>
    @foreach( $creator_info as $creator_info )
    <table>
        <tr>
            <th>Creator_id：{{ $creator_info->creator_id }}</th>
            <th>Creater_name：{{ $creator_info->creator_name }}</th>
            <th>Creater_birthday：{{ $creator_info->birthday }}</th>
        </tr>
        <tr>
            <th>Creater_gender：{{ $creator_info->gender }}</th>
            <th>Creater_twitter：{{ $creator_info->twitter }}</th>
            <th>Creater_instagram：{{ $creator_info->instagram }}</th>
        </tr>
    </table>
    @endforeach
    <!--別ページ-->
    <a href="/mypage_creator"><button>クリエイター情報編集</button></a>
    <li><a href="/">売り上げ管理画面</a></li>
    <!------------>
</div><br>

<div>
    <!--別ページ-->
    <li>出品管理画面</li>
    <li>---------<a href="/video_info">動画</a></li>
    <li>---------<a href="/">クリエイターツール</a></li>
    <!------------>
</div>
@endisset

@else

<p>ログインしてから</p>

@endauth