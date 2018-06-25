@extends('layouts.app')

@section('content')
        
        <div id="wrapper">
        <div id="main">
            <h2>PHPについて</h2>
            <section>
                <h3 id="variables">変数(variables)について</h3>
                    <p>変数とは、名前（変数名）をつけた箱に1つの値や文字列といったデータを入れて使い回すというものです。<br>
                    次の変数のプログラムでは、color という箱に入った red を、echoで呼び出しています。</p>
                   <h5>コード</h5>
                    <pre>
                        <code>
<?php
print htmlspecialchars('
<?php
    $color = “red”;
    echo $color;
?>
    ')
?>
                        </code>
                    </pre>
                    <h5>実行結果</h5>
                    <p id="result">red</p><br>
            </section>
            <section>
                <h3 id="variables_type">変数の型について</h3>
                    <p>プログラミング言語PHPには、値を格納（代入）できる変数が以下の表に掲載しているように複数あります。<br>
                    ここでは変数の型と使い方についてみていきます。</p>
                <table border=1>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>型の種類（英語）</th>
                            <th>型の種類（日本語）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Integer</td>
                            <td>整数型</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Float</td>
                            <td>浮動小数点型</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>String</td>
                            <td>文字列</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Boolean</td>
                            <td>論理型</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Array</td>
                            <td>配列</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>NULL</td>
                            <td>ヌル値</td></td>
                        </tr>
                    </tbody>
                </table><br>
                <section>
                    <h4 id="integer">1. 整数型(Integer)</h4>
                    <p>整数型とは、小数点を含まない「0, 1, 2, -3」といったゼロ、正の整数、負の整数を表す型です。</p>
                    <h5>構文</h5>
                    <pre>
                        <code>
&lt;?php
    $num = 2;
    var_dump($num);
?&gt;
                        </code>
                    </pre>
                    <p>※var_dump<数とは・・・データを結果として表す関数です。指定した変数の値や型式をわかりやすい形式に整形して出力します。</p>
                </section><br>
                <section>
                    <h4 id="float">2. 浮動小数点型(Float)</h4>
                    <p>浮動小数点とは小数点付きの数値のことです。（例：3.14 や 0.004）<br>
                    浮動小数点数 は、次の構文により指定できます。</p>
                    <h5>構文</h5>
                    <pre>
                        <code>
&lt;?php
    $num = 1.2;
    var_dump($num);
?&gt;
                        </code>
                    </pre>
                </section><br>
                <section>
                    <h4 id="string">3.文字列(String)</h4>
                    <p>PHPで文字列を扱う際には、string型を使用します。<br><p/>
                    <h5>構文</h5>
                    <pre>
                        <code>
&lt;?php
    $str1 = 'テキスト';
    $str2 = "テキスト";
    var_dump($str1);
    var_dump($str2);
?&gt;
                        </code>
                    <pre/><br>
                </section>
                <section>
                    <h4 id="boolean">4.論理型(Boolean)</h4>
                    <P>論理型とは、真か偽かを表す型で、trueかfalseの値を持ちます。</P>
                    <h5>構文</h5>
                    <pre>
                        <code>
&lt;?php
    $t = true;
    $f = false;
    var_dump($t);
    var_dump($f);
?&gt;
                        </code>
                    <pre/><br>
                </section>
                <section>
                    <h4 id="array">5.配列(Array)</h4>
                    <p>配列では、ひとつの変数に複数の値を入れることができます。</p>
                    <h5>構文</h5>
                     <pre>
                        <code>
&lt;?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ'];
    print $fruits[0] . PHP_EOL;            // displays リンゴ
?&gt;
                        </code>
                    </pre>
                     <h5>実行結果</h5>
                    <p id="result">リンゴ</p>
                </section><br>
                <section>
                    <h4 id="null">6. NULL</h4>
                    <p>NULL型は変数が値を持っていないことを表す特殊な型で、値を出力すると「NULL」という値を返します。</p>
                    <h5>構文</h5>
                    <pre>
                        <code>
&lt;?php
    var_dump($var);
?&gt;
                        </code>
                    </pre>
                    <h5>実行結果</h5>
                    <p id="result">NULL</p>
                </section><br>
            </section>
            <section>
                <h3 id="branching">条件分岐(Branching)について</h3>
                    <h4>if文</h4>
                    <pre>
                        <code>
&lt;?php
    <i>// 10 > 5 が正しい場合、if (true)となり、 {...} が実行される。</i>
        if (10 > 5) {
            print 'ここだけ表示される' . PHP_EOL;
        }

    <i>// 10 <= 5が誤りの場合、if (false)となり、 {...} は実行されない。</i>
        if (10 <= 5) {
            print 'ここには絶対来ない' . PHP_EOL;
        }
?&gt;
                        </code>
                    </pre>
                    <p></p>
            </section>
            <section>
                <h3 id="looping">繰り返し(Looping)について</h3>
                    <p>PHPではある操作を繰り返し行う(ループ処理)為のwhile文、for文、foreach文が用意されています。</p><br>
                    <h4 id="while">while文</h4>
                    <p>while文は繰り返しを行うときに使用するループ文で、PHPの中では最も簡単なタイプのループ処理となります。</p>
                    <h5>構文</h5>    
                        <pre>
                            <code>
&lt;?php
<i>//変数を初期化する</i>
    $number = 0;

    while ($number != 9) {
    $number = mt_rand() % 10;
    print $number . PHP_EOL;
    }
?&gt;
                            </code>
                        </pre>
                        <img src=jet-kun_image/whileloop.png><br>
                    <h4 id="for">for文</h4>
                    <p>for文は処理を繰り返し行うときに使用するループ文です。<br>
                    配列とオブジェクト以外にも他のデータ型(数値型や文字列型など)を構文で指定することができます。<br>
                    for文は繰り返し処理の中ではもっとも汎用性が高く、よく使われるループ文となります。</p>
                    <h5>構文</h5>
                        <pre>
                            <code>
&lt;?php
    for ($i = 0; $i < 10; $i++) {
    print $i . '回目' . PHP_EOL;
    }
?&gt;
                            </code>
                        </pre>
                        <h5>実行結果</h5>
                        <p id="result">0回目<br>1回目<br>2回目<br>3回目<br>4回目<br>5回目<br>6回目<br>7回目<br>8回目<br>9回目</p><br>
                    <h4 id="foreach">foreach文</h4>
                    <p>foreach文とは、主に配列の値を取得したり操作するときに使用する配列専用のループ処理となります。<br>
                    for文やwhile文では条件を設定してループ処理を行いますが、foreach文では配列の要素分ループ処理が行われます。<br>
                    つまり、foreach文は要素数が多い配列や、データベースにあるたくさんの情報を順に取り出したい時などにとても便利です。<br>
                    </p>
                    <h5>構文</h5>
                        <pre>
                            <code>
&lt;?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    foreach ($fruits as $key => $fruit) {
    print $key . '回目: ' . $fruit . PHP_EOL;
    }
?&gt;
                            </code>
                        </pre>
                        <h5>実行結果</h5>
                        <p id="result">0回目: リンゴ<br>1回目: バナナ<br>2回目: オレンジ<br>3回目: ぶどう<br>4回目: 桃</p>
            <section><br>
                <h3 id="function">関数(Function)について</h3>
                    <img src=jet-kun_image/function.png>
                    <h4>関数を定義する</h4>
                    <p>関数はfunctionを使って定義します。</p>
                         <pre>
                            <code>
&lt;?php
    //関数を定義する
    function sum() {
        $result = 0;
        for ($i = 1; $i <= 9; $i++) {
        $result = $result + $i;
        }
        print $result . PHP_EOL;
    }
?&gt;
                            </code>
                        </pre><br>
                    <h4>関数を呼び出す</h4>
                    <p>関数は呼び出されるまで実行されません。</p>
                        <pre>
                            <code>
&lt;?php
    // 関数を定義する
    function sum() {
        $result = 0;
        for ($i = 1; $i <= 9; $i++) {
        $result = $result + $i;
        }
        print $result . PHP_EOL;
    }

    // 関数を呼び出す
    sum();            // 関数が実行され、実行結果が表示される
?&gt;
                            </code>
                        </pre><br>
                    <h4>返り値(return)について</h4>
                    <p> 変数の中に関数の実行結果を格納したい場合、returnを使うことができます。</p>
                        <pre>
                            <code>
&lt;?php
    <i>//関数を定義する</i>
    function sum($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        return $result;
    }

    // 関数を呼び出す
    $sum1 = sum(1, 9);
    $sum2 = sum(1, 1000);
    $sum3 = sum(1000, 9999);
?&gt;
                            </code>
                        </pre>
            </section>
            <section>
                <h3 id="data">データの送受信について</h3><br>
                    <h4>データの送信</h4>
                    <p>データの送信にはformタグを使います。</p>
                        <pre>
                            <code>
&lt;form action="index.php" method="POST"&gt;
    &lt;label&gt;名前: &lt;input type="text" name="target_name"&gt;&lt;/label&gt;
    &lt;input type="submit" value="送信"&gt;
&lt;/form&gt;
                            </code>
                        </pre>
                    <h4>データの受信</h4>
                    <p>データを受信するには、<br>
                    $_POST['ここに送信フォームで定義したlabelタグの中のnameを入れる']<br>
                    を使います。</p><br>
                    <h4>データ送受信のコード例</h4>
                        <pre>
                            <code>
&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;タイトル&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action="index.php" method="POST"&gt;
            &lt;label&gt;名前: &lt;input type="text" name="target_name"&gt;&lt;/label&gt;
            &lt;input type="submit" value="送信"&gt;
        &lt;/form&gt;
            &lt;p&gt;今は&lt;?php print $now_hour; ?&gt;時です。&lt;/p&gt;
            &lt;p&gt;&lt;?php print greeting($now_hour); ?&gt;、太郎さん&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;

                            </code>
                        </pre>
            </section>
        
        </div>
        
        <aside id='sidebar'>
            <h1>目次</h1>
            <h1><a href="jet-kun_home.php"><img src="jet-kun_image/jet-kun_logo.png" alt="JET-kun"></a></h1>
                <ul>
                    <!-- 折り畳み展開ポインタ1 -->
                    <div onclick="obj=document.getElementById('open1').style; obj.display=(obj.display=='none')?'block':'none';">
                        <a style="cursor:pointer;">▼ PHP</a>
                    </div>
                    
                    <!-- 折り畳まれ部分1 -->
                    <div id="open1" style="display:none;clear:both;">
                        <ul style="list-style-type: none">
                            <li>
                                <a href="#variables">◇ 変数(variables)について</a>
                            </li>
                            <li>
                                <div onclick="obj=document.getElementById('open2').style; obj.display=(obj.display=='none')?'block':'none';">
                                <a href="cursor:pointer";>▽ 変数(variables)の型について</a>
                                </div>
                                
                                <div id="open2" style="display:none;clear:both;">
                                    <ul style="list-style-type: none">
                                        <li><a href="#integer">・ 整数型(Integer)</a></li>
                                        <li><a href="#float">・ 浮動小数点型(Float)</a></li>
                                        <li><a href="#string">・ 文字列(String)</a></li>
                                        <li><a href="#boolean">・  論理型(Boolean)</a></li>
                                        <li><a href="#array">・ 配列(Array)</a></li>
                                        <li><a href="#null">・ ヌル値(NULL)</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#branching">◇  条件分岐(Branching)について</a>
                            </li>
                            <li>
                                <div onclick="obj=document.getElementById('open3').style; obj.display=(obj.display=='none')?'block':'none';">
                                <a href="#cursor:pointer">▽ 繰り返し(Looping)について</a>
                                </div>
                                
                                <div id="open3" style="display:none;clear:both;">
                                    <ul style="list-style-type: none">
                                    <li><a href="#while">・ while文</a></li>
                                    <li><a href="#for">・ for文</a></li>
                                    <li><a href="#foreach">・ foreach文</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#function">◇ 関数(function)について</a>
                            </li>
                            <li>
                                <a href="#data">◇ データの送受信について</a>
                            </li>
                        </ul>
                    </div>
                </ul>
        </aside>
        </div>
   

@endsection