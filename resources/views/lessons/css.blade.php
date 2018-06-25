@extends('layouts.app')

@section('content')
        <!--ここからヘッダー -->
        <header>
        </header>
    
        <div id='wrapper' >
            <aside id='sidebar' class='clearfix'>
                <h1>目次</h1>
                <h1><a href="jet-kun_home.php"><img src="jet-kun_image/jet-kun_logo.png" alt="JET-kun"></a></h1>
                <ul>
                    <!-- 折り畳み展開ポインタ1 -->
                    <div onclick="obj=document.getElementById('open1').style; obj.display=(obj.display=='none')?'block':'none';">
                        <a style="cursor:pointer;">▼ CSS</a>
                    </div>
                    <!--// 折り畳み展開ポインタ1 -->
                    
                        <!-- 折り畳まれ部分1 -->
                        <div id="open1" style="display:none;clear:both;">
                            <ul style="list-style-type: none">
                            <li>
                                <a href="#basic">◇ 基本事項</a>
                            </li>
                            <li>
                                <!-- 折り畳み展開ポインタ1 -->
                                <div onclick="obj=document.getElementById('open2').style; obj.display=(obj.display=='none')?'block':'none';">
                                <a style="cursor:pointer;">▽ CSSの書き方</a>                 
                                </div>
                                <!--// 折り畳み展開ポインタ2 -->
                        
                                    <!-- 折り畳まれ部分2 -->
                                <div id="open2" style="display:none;clear:both;">
                                    <ul style="list-style-type: none">
                                        <li><a href="#text">・ テキスト関係</a></li>
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
            <div id='basic'>
                <h1>基本事項</h1>
                <ul>
                    <li>@charset"UTF-8"を一番上に書く </li>
                    <li>HTMLとCSSをリンクさせるためにHTMLのhead部分に< link rel= "stylesheet" href="#" >を入れる。</li>
                    <li>#にはリンクさせたいCSS名を入れる</li>
                    <li>CSSでのコメントの書き方は/*~*/と書いてその間にコメントを入れる</li>
                </ul>
            </div>
            
            <div id='main'>
                <section id='point'>
                    <h1 id='css'>CSSの書き方</h1>
                    <section class='clearfix'>
                        <section id='text'>
                            <p>テキスト関係</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>プロパティ</th>
                                        <th>用途</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>color</td>
                                        <td>色を変える</td>
                                    </tr>
                                    <tr>
                                        <td>font-size</td>
                                        <td>文字サイズを変える</td>
                                    </tr>
                                    <tr>
                                        <td>font-weight</td>
                                        <td>文字の太さを変える</td>
                                    </tr>
                                    <tr>
                                        <td>text-align</td>
                                        <td>文字配置を変える</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <section id='back_ground' class='clearfix'>
                            <p>背景関係</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>プロパティ</th>
                                        <th>用途</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>background-color</td>
                                        <td>背景色を変える</td>
                                    </tr>
                                    <tr>
                                        <td>background-image</td>
                                        <td>背景に写真を入れる</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <section  id='box' class='clearfix'>
                            <p>ボックスの構造</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>プロパティ</th>
                                        <th>用途</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>margin</td>
                                        <td>余白の設定</td>
                                    </tr>
                                    <tr>
                                        <td>border</td>
                                        <td>ボーダーのスタイル・太さ・色を指定する</td>
                                    </tr>
                                    <tr>
                                        <td>padding</td>
                                        <td>内側の余白の設定</td>
                                    </tr>
                                    <tr>
                                        <td>width</td>
                                        <td>幅を指定する</td>
                                    </tr>
                                    <tr>
                                        <td>height</td>
                                        <td>高さを指定する</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </section>
                    <section id='l_c' class="clearfix">
                        <section id='layout'>
                            <p>レイアウト</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>プロパティ</th>
                                        <th>用途</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>float</td>
                                        <td>左または右に寄せて配置する</td>
                                    </tr>
                                    <tr>
                                        <td>position</td>
                                        <td>ボックスの配置方法を指定する</td>
                                    </tr>
                                    <tr>
                                        <td>overflow</td>
                                        <td>はみ出た内容の表示方法を指定する</td>
                                    </tr>
                                    <tr>
                                        <td>display:block</td>
                                        <td>要素の表示形式を縦にする</td>
                                    </tr>
                                    <tr>
                                        <td>display:inline</td>
                                        <td>要素の表示形式を横にする（幅と高さは指定できない）</td>
                                    </tr>
                                    <tr>
                                        <td>display:inline-block</td>
                                        <td>要素の表示形式を横にする（幅と高さが指定できる）</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <section id='_clearfix'>
                            <h1>clearfixの実際のコード</h1>
                                <pre>
                                    <code>
                                        
.clearfix::after {
content:'';
display: block;
clear: both;}
                                    </code>
                                </pre>
                                 <P>*floatを使う際にHTML上でclearfixを使うと回り込みを解除できる</P>
                        </section>
                    </section>    
                    <section id='pseudo' class='clearfix'>
                        <h1>Pseudo</h1>
                        <p>実際のコード例</p>
                            <pre>
                                <code>
                                    
a:link {color: #0000ff;}
a:hover {color: #ff0000;}
a:visited {color: #999999;}
                                </code>
                            </pre>
                    <ul>
                        <li>a:link {color: #0000ff;} このコードはリンクしているURLの色を決定する</li>
                        <li>a:hover {color: #ff0000;} このコードはマウスを当てた時に色が変わる</li>
                        <li>a:visited {color: #999999;} このコードは訪問済みの時に色が変わる</li>
                    </ul>
                    </section>
                    <section id='class_id' class="clearfix">
                        <h1>class属性とid属性の指定の仕方</h1>
                        <section id='_class' class='clearfix'><h1>実際のコード例</h1>
                            <pre>
                                <code>
                                    
                                    
#wrapper {color: red;}</code>
                            </pre>
                        <p>wrapperはid属性のため、#をつけることでid属性のwrapper部分にCSSが適応される</p>
                        </section>
                        <section id='_id' class='clearfix'>
                        <h1>実際のコード例</h1>
                            <pre>
                                <code>
                                    
                                
.important {color: red;}</code>
                            </pre>
                        <p>importantはclass属性のため、.をつけることでclass属性のimportant部分にCSSが適応される</p>
                        </section>
                </section>
                <div id='code'>
                    <h1>コードペン</h1>
                    <p data-height="265" data-theme-id="0" data-slug-hash="OZaEpp" data-default-tab="html,result" data-user="taisei" data-embed-version="2" data-pen-title="kitchen" class="codepen">See the Pen <a href="https://codepen.io/taisei/pen/OZaEpp/">kitchen</a> by taisei (<a href="https://codepen.io/taisei">@taisei</a>) on <a href="https://codepen.io">CodePen</a>.</p>
                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                </div>
            </div>
        </div>
   


@endsection


