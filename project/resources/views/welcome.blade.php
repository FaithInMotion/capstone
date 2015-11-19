@extends('layouts/master')
@section('content')
    <div class="container">
        <div class="main_content floatleft">

            <h2>Featured Stories</h2>
            <div class="fix main_content_container">
                <div class="fix single_content floatleft">
                    <div class="fix single_content_feature">
                        <a href=""><img src="{{$stories[0]->latestPhoto[0]->path}}" alt=""/></a>
                        <h3><a href="">{{$stories[0]->title}}</a></h3>
                        <span>{{$stories[0]->created_at}} <a href="">8 Comments</a></span>
                        <p>{{$stories[0]->synopsis}}</p>
                    </div>
                </div>

                <div class="fix single_content floatleft">
                    <div class="fix single_content_feature">
                        <a href=""><img src="{{$stories[4]->latestPhoto[0]->path}}" alt=""/></a>
                        <h3><a href="">{{$stories[4]->title}}</a></h3>
                        <span>{{$stories[4]->created_at}} <a href="">8 Comments</a></span>
                        <p>{{$stories[4]->synopsis}}</p>
                    </div>
                </div>
</div>

            <div class="fix main_content_container">

                <div class="fix single_content floatleft">
                    <ul id="post_list">
                        @for ($n=1; $n<=3; $n++)
                            <li>
                                <div class="fix single_home_content">
                                    <div class="fix single_home_content_img">
                                        <img src="{{$stories[$n]->latestPhoto[0]->path}}" alt=""/>
                                    </div>
                                    <div class="single_home_content_title">
                                        <h4><a href="">{{$stories[$n]->title}}</a></h4>
                                        <p>{{$stories[$n]->created_at}}, <a href="">8 Comments</a></p>
                                    </div>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>

                <div class="fix single_content floatleft">
                    <ul id="post_list">
                        @for ($n=5; $n<=7; $n++)
                            <li>
                                <div class="fix single_home_content">
                                    <div class="fix single_home_content_img">
                                        <img src="{{$stories[$n]->latestPhoto[0]->path}}" alt=""/>
                                    </div>
                                    <div class="single_home_content_title">
                                        <h4><a href="">{{$stories[$n]->title}}</a></h4>
                                        <p>{{$stories[$n]->created_at}}, <a href="">8 Comments</a></p>
                                    </div>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
</div>
            <div class="fix main_content_container">
                <div class="fix single_content_latest_post floatleft">
                    <h2><span>Latest Posts</span></h2>
                    <div class="fix single_latest_post">
                        <div class="fix latest_post_img floatleft">
                            <img src="{{$stories[8]->latestPhoto[0]->path}}" alt=""/>
                        </div>
                        <div class="fix latest_post_title floatright">
                            <h2><a href="">{{$stories[8]->title}}</a></h2>
                            <span>{{$stories[8]->created_at}}<a href="">8 Comments</a></span>
                            <p>{{$stories[8]->synopsis}}</p>
                        </div>
                    </div>
                    <div class="fix single_latest_post">
                        <div class="fix latest_post_img floatleft">
                            <img src="{{$stories[9]->latestPhoto[0]->path}}" alt=""/>
                        </div>
                        <div class="fix latest_post_title floatright">
                            <h2><a href="">{{$stories[9]->title}}</a></h2>
                            <span>{{$stories[9]->created_at}}<a href="">8 Comments</a></span>
                            <p>{{$stories[9]->synopsis}}</p>
                        </div>
                    </div>
                    <div class="fix single_latest_post">
                        <div class="fix latest_post_img floatleft">
                            <img src="{{$stories[10]->latestPhoto[0]->path}}" alt=""/>
                        </div>
                        <div class="fix latest_post_title floatright">
                            <h2><a href="">{{$stories[10]->title}}</a></h2>
                            <span>{{$stories[10]->created_at}}<a href="">8 Comments</a></span>
                            <p>{{$stories[10]->synopsis}}</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

    </div>
@stop