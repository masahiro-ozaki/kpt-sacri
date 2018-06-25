

@extends('layouts.app')

@section('content')
        
<header>
    <h1>HTML</h1>    
</header>  
<!--ここからwrapper-->
<section id="wrapper" class="clearfix">
    <!--ここからmain-->
    <div  class="main">
        
    <!--基本構成-->
        <div id="basic">
        <h2>1.HTMLの基本構成</h2>
        <pre>
        <code>
            &lt;!DOCTYPE html&gt;
            &lt;html lang="ja"&gt;
                &lt;head&gt;
                    &lt;meta charset="utf-8"&gt;
                    &lt;title&gt;HTML/CSSでWebページ作成&lt;/title&gt;
                    &lt;link rel="stylesheet" href="HTML.css"&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;header&gt;
                        ここはヘッダーです
                    &lt;/header&gt;
                    &lt;div id="wrapper" class="clearfix"&gt;
                        &lt;nav id="menu"&gt;
                            &lt;ul&gt;
                                &lt;li>Webサイトsの仕組み&lt;/li&gt;
                                &lt;li>HTMLとCSSの概要&lt;/li&gt;
                    　   &lt;/ul&gt;
                        &lt;/nav&gt;
                        &lt;div id="main"&gt;
                            &lt;h1&gt;HTML/CSSでWebページを作成&lt;/h&gt;
                            &lt;h2&gt;Webサイトの仕組み&lt;/h2&gt;
                            &lt;p&gt;Webサイトとは、Webページをひとまとまりにして公開したWebページの集まりのことです。&lt;/p&gt;
                            &lt;h3&gt;Webブラウザとは&lt;/h3&gt;
                            &lt;p&gt;Webブラウザの説明が入ります。&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    
                    
                     &lt;footer&gt;
                            ここはフッターです
                     &lt;/footer&gt;
                 &lt;/body&gt;
            &lt;/html&gt;
        </code>
        </pre>
        </div>
    
    <!--リンク-->
        <div class="link">
        <h2>2.リンク</h2>
            <h3>CSSのリンク</h3>
            
            <p>&lt;link rel="stylesheet" href="HTML.css"&gt;</p><br>
                <pre>
                <code>
                &lt;head&gt;
                &lt;!--CSSのリンクはheadの中に書く--&gt;
                    &lt;meta charset="utf-8"&gt;
                    &lt;title&gt;CSS link below&lt;/title&gt;
                    &lt;link rel="stylesheet" href="HTML.css"&gt;
                &lt;/head&gt;
                </code>
                </pre>
            
            <h3>外部ページのリンク</h3>
                  <!--画像-->  
            <p>&lt;a href="外部サイトのＵＲＬ"&gt;アンカーテキスト&lt;/a&gt;<p>
                <br>
            <pre>
            <code>
                &lt;a href="https://techacademy.jp/"&gt;TechAcademy [テックアカデミー] | オンラインブートキャンプ&lt;/a&gt;
                 
            </code>
            </pre>
           
            <h3>画像のリンク</h3>
            
            <P>&lt;a href=""&gt;&lt;img src="イメージのファイル名" alt="アンカーテキスト"&gt;&lt;/a&gt;</p>
            <br>
            
            <pre>
            <code>
            
             &lt;img src="http://static.techacademy.jp/magazine/wp-content/themes/ta-magazine/images/logo-magazine.png" alt="techacademy magazineのロゴ"&gt; &lt;/a&gt;
             
            </code>
            </pre>
        </div>
    
     <!--classとidの違い-->
        <div class="classid">
        <h2>3.classとidの違い</h2>
        
            <h3>id</h3>
                <ul>The id attribute can only be set on the same page.</ul><br>
            
            <pre>
            <code>
            &lt;div id="introduction"&gt;
            &lt;p&gt;これから〜〜の紹介をします。&lt;/p&gt;
            &lt;/div&gt;
            </code>
            </pre>
            
            <h3>class</h3>
                <ul>The class attribute can be used as many times as you like.</ul>
                
              <pre>
                <code>   
                &lt;div class="main"&gt;
                &lt;p&gt;これから〜〜の紹介をします。&lt;/p&gt;
                &lt;/div&gt;
                </code>
                </pre>
                
            <h3>Classとidを同時にセット</h3>
            
            <pre>
            <code> 
            &lt;div id="introduction" class="main"&gt;
            &lt;p&gt;これから〜〜の紹介をします。&lt;/p&gt;
            &lt;/div&gt;
            </code>
            </pre>
    
        </div>
    
     <!--Relative pathとAbsolute pathの違い-->
        <div class="classid">
            <h2>4.Relative pathとAbsolute pathの違い</h2>
        
                <h3>Relative path</h3>
                    <p>./ (./ means lower hierarchy)<br>
                    ../ (../ means upper hierarchy)</p>
                <!--Relative path-->
                    <p>If you want to pick up the lower hierarchy's file, follow the instruction bellow.</p>
                    
                <!--techacademylesson3 12.1の二枚目の画像を挿入-->
                    <img src="jet-kun_image/lowerfile.png" alt="Access to the lower hierarchy's file" title="lower file">
                    
                    <pre>
                    <code>
                        
                    &lt;link rel="stylesheet" href="./css/style.css"&gt;
                    
                    </code>
                    </pre>
                    
                    <p>If you want to pick up the same hierarchy's file, follow the instruction bellow.</p>
                <!--techacademylesson3 12.1の三枚目の画像を挿入-->
                    <img src="jet-kun_image/samefile.png" alt="Access to the same hierarchy's file" title="same file">
                    
                    <pre>
                    <code>
                        
                    &lt;link rel="stylesheet" href="../css/style.css"&gt;
                        
                    </code>
                    </pre>
        
                <h3>Absolute path</h3>
                 <!--Absolute path-->
                    <p>Absolute path is used when the file you want to call is not in the same directory and it is published outside.</p>
                    <pre>
                    <code>
                    &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css"&gt;
                    </code>
                    </pre>
        </div>
    </div>
    <!--//main-->
    <!--sidebar-->
    <aside id="sidebar" class='clearfix'>
        <h1>目次</h1>
            <h1><a href="jet-kun_home.php"><img src="jet-kun_image/jet-kun_logo.png" alt="JET-kun"></a></h1>
            <ul>
            <!-- 折り畳み展開ポインタ1 -->
                <div onclick="obj=document.getElementById('open1').style; obj.display=(obj.display=='none')?'block':'none';">
                    <a style="cursor:pointer;">▼ HTML</a>
                </div>
            <!--// 折り畳み展開ポインタ1 -->
            <!-- 折り畳まれ部分1 -->
                <div id="open1" style="display:none;clear:both;">
                    <ul style="list-style-type: none">
                        <li>
                            <a href="#basic">◇ HTMLの基本構成</a>
                        </li>
                        <li>
                        <!-- 折り畳み展開ポインタ1 -->
                            <div onclick="obj=document.getElementById('open2').style; obj.display=(obj.display=='none')?'block':'none';">
                                <a style="cursor:pointer;">▽ HTMLの基本構成</a>                 
                            </div>
                        <!--// 折り畳み展開ポインタ2 -->
                            <!-- 折り畳まれ部分2 -->
                            <div id="open2" style="display:none;clear:both;">
                                <ul style="list-style-type: none">
                                    <li><a href="#text">・ テキスト関係）</a></li>
                                    <li><a href="#back_ground">・ 背景関係</a></li>
                                    <li><a href="#box">・ ボックスの構造</a></li>
                                    <li><a href="#layout">・ レイアウト</a></li>
                                    <li><a href="#pseudo">・ Pseudo</a></li>
                                    <li><a href="#class_id">・ class属性とid属性</a></li>
                                </ul>
                            </div>
                            <!--// 折り畳まれ部分2 -->
                        </li>
                        <li>
                            <a href="#code">◇ 実際のコード</a>
                        </li>
                    </ul>
                </div>
            </ul>
    </aside>
    <!--//sidebar-->


    </section>
    
    
@endsection