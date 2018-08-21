<html>
<head>
    <title>@yield('title')</title>
<style>
</style>
</head>

<body>
    <h1>@yield('title')</h1>
    <p>※h1タグ、@ yield('title')は試し。</p>    
    <ul>
        <!--<li><a href="/">トップページ：index.php</a></li>-->
        <li><a href="/home">サインイン：HomeController</a></li>
        <!--<li><a href="/register">ログイン:HomeController</a></li>-->
        <!-- httpsかhttpかの違い。保護されているか否か -->
        <li><a href="http://pro-1-miyatakazuhiko.c9users.io/register">Register:HomeController</a></li>
        <li><a href="/users">ユーザー情報</a></li>
        <li><a href="/creators">クリエイター登録/表示</a><br>
                                --------<a href="">出品動画一覧</a></li>
                                --------<a href="">口座登録(まだ先)</a></li>
        <li><a href="/video">動画アップロード</a></li>
        <li><a href="/"></a></li>
        <li><a href="/"></a></li>
        <li><a href="/"></a></li>
    </ul>
</body>
</html>