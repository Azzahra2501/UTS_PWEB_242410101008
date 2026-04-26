<nav style="
    padding:15px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;

    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255,255,255,0.3);
">
    <div style="color:pink; font-weight:bold; font-size:18px;">
        Stationify
    </div>

    <div style="display:flex; gap:25px;">
        @if(!empty($username))
            <a href="/dashboard" onclick="event.preventDefault();document.getElementById('dashForm').submit();" style="color:white;">Dashboard</a>
            <a href="/profile/{{ $username }}" style="color:white;">Profil</a>
            <a href="/pengelolaan/{{ $username }}" style="color:white;">Pengelolaan</a>
            <a href="/about/{{ $username }}" style="color:white;">About Stationify</a>
        @endif
    </div>

    @if(!empty($username))
        <a href="/" style="background:#ff6b9d; padding:8px 15px; border-radius:20px; color:white;">
            Logout
        </a>
    @endif

</nav>

@if(!empty($username))
<form id="dashForm" method="POST" action="/dashboard">
    @csrf
    <input type="hidden" name="username" value="{{ $username }}">
</form>
@endif