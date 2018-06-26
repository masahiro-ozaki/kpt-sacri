<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>JET-kun</title>
        
        <!-- Bootstrap --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        
        <!--CSS-->
        <style>
            /*セピア*/
            /*#main_visual  {*/
            /*    -webkit-filter: sepia(100%);*/
            /*    filter: sepia(100%);*/
            /*    -webkit-transition: .3s ease-in-out;*/
            /*    transition: .3s ease-in-out;*/
            /*}*/
            /*#main_visual:hover {*/
            /*    -webkit-filter: sepia(0);*/
            /*    filter: sepia(0);*/
            /*}*/
            figure {
              position: relative;
            }
            figure::before {
              position: absolute;
              top: 0;
              left: -75%;
              z-index: 2;
              display: block;
              content: '';
              width: 50%;
              height: 100%;
              background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
              background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
              -webkit-transform: skewX(-25deg);
              transform: skewX(-25deg);
            }
            figure:hover::before {
              -webkit-animation: shine .75s;
              animation: shine .75s;
            }
            @-webkit-keyframes shine {
              100% {
                left: 125%;
              }
            }
            @keyframes shine {
              100% {
                left: 125%;
              }
            }
        </style>
        
    </head>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 col-lg-offset-1">
        
        <!--ここからヘッダー-->
        <header>
            <div class="pull-left"><a href="/"><img src="jet-kun_image/JETS3.jpg" alt="JET-kun" class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></a></div>
            <nav id="KPT_form">
                <ul class="list-inline col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <li class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="/resources/views/kpts/index" class="btn btn-default btn-block list-inline-item">KPTフォーム</a></li>
                </ul>
            </nav>
            <nav id="global_navi">
                <ul class="list-inline col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="/resources/views/lessons/html" class="btn btn-default btn-block list-inline-item">HTML</a></li>
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="/resources/views/lessons/css" class="btn btn-default btn-block list-inline-item">CSS</a></li>
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="/resources/views/lessons/php" class="btn btn-default btn-block list-inline-item">PHP</a></li><br>
                    
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="***.html" class="btn btn-default btn-block list-inline-item">MySQL</a></li>
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="***.html" class="btn btn-default btn-block list-inline-item">Git/GitHub</a></li>
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="***.html" class="btn btn-default btn-block list-inline-item">Laravel</a></li><br>
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="***.html" class="btn btn-default btn-block list-inline-item">Bootstrap</a></li>
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="***.html" class="btn btn-default btn-block list-inline-item">Heroku</a></li>
                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><a href="***.html" class="btn btn-default btn-block list-inline-item">Others</a></li>
                    
                    <!-- <li><a href="contact.html">お問い合わせ</a></li> -->
                    
                </ul>
            </nav>
        </header>
        <!--ヘッダここまでー-->
        <!--ここからメインビジュアル画像-->
        <figure>
            <div id="main_visual">
                <img src="jet-kun_image/main5.png" alt="プログラミングっぽい画像" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            </div>
            
            <!--<figcaption>-->
            <!--    <h3></h3>-->
            <!--    <p><b>　今日もがんばろーーー♪</b></p>-->
            <!--</figcaption>-->
            
        </figure>
        <!--メインビジュアル画像ここまで-->
        <!--ここからwrapperー-->
        <div id="wrapper" class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!--ここからメイン -->
            <div id="main">
                <section id="news">
                    <h3>参考サイト</h3>
                    <table class="table table-striped">
                        <tr>
                            <td>＜プログラミング全般＞</td>
                            <td><a href="https://qiita.com">Qiita プログラマーによるknowledge共有サイト</a></td>
                        </tr>
                        <tr>
                            <td>＜プログラミング全般＞</td>
                            <td><a href="https://ja.stackoverflow.com">Stack Overflow プログラミングのQ&Aサイト</a></td>
                        </tr>
                        <tr>
                            <td>＜プログラミング全般＞</td>
                            <td><a href="https://prog-8.com">Progate 環境構築不要でネットでプログラミングを勉強する 継続して学習するため</a></td>
                        </tr>
                        <tr>
                            <td>＜プログラミング全般＞</td>
                            <td><a href="https://dotinstall.com">ドット・インストール 環境構築からプログラミングまで動画で学べる無料サイト</a></td>
                        </tr>
                        <tr>
                            <td>＜PHP関連＞</td>
                            <td><a href="https://www.sejuku.net/blog/23753">クラス変数・クラスメソッドを使用する方法(static)</a></td>
                        </tr>
                    </table>
                </section>
            </div>
            <!--ここまでメイン -->
            <!--ここからサイド -->
            <aside id="sidebar">
                <section id="side_banner">
                          
                </section>
            </aside>
            <!--サイドここまで -->
        </div>
        <!--wrapperここまで-->
        <!--ここからフッター-->
        <footer>
            <div class="text-center text-muted col-xs-12 col-sm-12 col-md-12 col-lg-12">© 2018 JETS.</div>
        </footer>
        <!--フッターここまで-->
                </div>
            </div>
        </div>
    </body>
</html>