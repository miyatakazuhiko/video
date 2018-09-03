<html>
<head>
    <title>@yield('title')</title>
<style>
</style>
</head>

<body>
    <h1>@yield('title')</h1>
    <p>※h1タグ、@ yield('title')は試し。</p>  
    
    <!--loginしてる場合の表示画面-->
    @auth
    <p>{{ Auth::user()->firstname }}</p>
    <p><a href="/aaa">情報とれてるか確認(video)</a></p>
    @endauth
    <!----------------------------->
    
    <ul>
        <li><a href="/home">サインイン：HomeController</a></li>
        <!--<li><a href="/register">ログイン:HomeController</a></li>-->
        <!-- httpsかhttpかの違い。保護されているか否か -->
        <li><a href="http://pro-2-miyatakazuhiko.c9users.io/register">Register:HomeController</a></li>
        <li><a href="/users">ユーザー情報</a></li><br>
        
        <li><a href="/creators">クリエイター登録/表示</a><br><br>
                                
        <li><a href="/video">動画アップロード(とりあえず誰でも出来る)</a></li>
        <li><a href="/video_view">動画表示一覧（誰でも見れるやつ）</a></li>
        <li><a href="/video_info">出品動画管理画面（更新/削除）</a></li><br>
        
        <li><a href="/search">ユーザー検索/動画検索（ユーザー検索、タイトル検索、値段検索）</a></li><br>
        
        <li><a href="/">商品購入画面</a></li>
        
        <li><a href="/mypage">マイページ（購入済み動画画面）</a></li>
    </ul>
</body>
</html>