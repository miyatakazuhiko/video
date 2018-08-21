@if (count($users)>0) 
    <p>ユーザー情報</p>
    @foreach ($users as $user)
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
        <p>-----------------------------------</p>
    </div>
    @endforeach
@endif