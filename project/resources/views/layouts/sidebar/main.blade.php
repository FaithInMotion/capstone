<div class="fix single_sidebar">
    <h2><span>Search Stories</span></h2>
    <input type="text" placeholder=""/>
</div>
<div class="fix single_sidebar">
    <h2><span>Recent Stories</span></h2>
    <ul>
       @if (Auth::check())
        @for($n=10; $n>=6; $n--)
            <li><a href="">{{$stories[$n]->title}}</a></li>
        @endfor
           @endif
    </ul>
</div>
<div class="fix single_sidebar">
    <h2><span>Genres</span></h2>
    <ul>
        <li><a href="">Action</a>(15)</li>
        <li><a href="">Adventure</a>(15)</li>
        <li><a href="">Comedy</a>(15)</li>
        <li><a href="">Crime</a>(15)</li>
        <li><a href="">Drama</a>(15)</li>
        <li><a href="">Fantasy</a>(15)</li>
        <li><a href="">Historical</a>(15)</li>
        <li><a href="">Horror/Thriller</a>(15)</li>
        <li><a href="">Mystery</a>(15)</li>
        <li><a href="">Philosophical</a>(15)</li>
        <li><a href="">Political</a>(15)</li>
        <li><a href="">Romance</a>(15)</li>
        <li><a href="">Satire</a>(15)</li>
        <li><a href="">Science Fiction</a>(15)</li>
    </ul>
</div>

<div class="fix single_sidebar tags">
    <h2><span>Tags</span></h2>
    <a href="">Courage</a>
    <a href="">Friendship</a>
    <a href="">Family</a>
    <a href="">Short story</a>
    <a href="">Justice</a>
    <a href="">Betrayal</a>
    <a href="">Jealousy</a>
    <a href="">Love</a>
    <a href="">Prejudice</a>
    <a href="">Lust</a>
    <a href="">Young Adults</a>
    <a href="">Motherhood</a>
    <a href="">Nature</a>
    <a href="">Technology</a>
    <a href="">Fashion</a>
    <a href="">Design</a>
    <a href="">Self-Improvement</a>
    <a href="">Religion</a>
</div>
</div>
