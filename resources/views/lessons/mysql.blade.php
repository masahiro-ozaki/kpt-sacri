<style>
    #sidebar {
        position: fixed;
    }
</style>

@extends('layouts.app')

@section('content')

<div class="row">
    <!--***************************************右側；目次（サイドバー）***************************************-->
    <div class="hidden-xs hidden-sm hidden-md col-lg-3 col-lg-offset-9">
    <aside id='sidebar'>
            <h3>目次</h3>
                <ul>
                    <!-- 折り畳み展開ポインタ1 -->
                    <div onclick="obj=document.getElementById('open1').style; obj.display=(obj.display=='none')?'block':'none';">
                        <a style="cursor:pointer;">▼ MySQL</a>
                    </div>
                    
                    <!-- 折り畳まれ部分1 -->
                    <div id="open1" style="display:none;clear:both;">
                        <ul style="list-style-type: none">
                            <li>
                                <a href="#relational">◇ リレーショナルデータベース</a>
                            </li>
                            <li>
                                <a href="#role">◇ SQLの3つの役割</a>
                            </li>
                            <li>
                                <a href="#table">◇ テーブルの作成</a>
                            </li>
                            <li>
                                <a href="#order">◇ ORDER BY</a>
                            </li>
                            <li>
                                <div onclick="obj=document.getElementById('open2').style; obj.display=(obj.display=='none')?'block':'none';">
                                <a href="cursor:pointer";>▽ 集合関数</a>
                                </div>
                                
                                <div id="open2" style="display:none;clear:both;">
                                    <ul style="list-style-type: none">
                                        <li><a href="#count">1. COUNT関数</a></li>
                                        <li><a href="#sum">2. SUM関数</a></li>
                                        <li><a href="#avg">3. AVG関数</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#join">◇ テーブルの結合</a>
                            </li>
                            <li>
                                <a href="#groupby">◇ GROUP BY</a>
                            </li>
                        </ul>
                    </div>
                </ul>
        </aside>
    </div>
    
    <!--***************************************左側；メインコンテンツ***************************************-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-1">
        <div id="main">
            <h2>MySQL</h2>
            
            <section>
                <h3 id="relational"><span class="glyphicon glyphicon-tags"></span> リレーショナルデータベース</h3>
                   <img src=/jet-kun_image/relational_database.png class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
            </section>
            <br>
            <section>
                <h3 id="role"><span class="glyphicon glyphicon-tags"></span> SQLの3つの役割</h3>
                    <h4>1. Data manipulation SQL(DML)</h4>
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">SQLキーワード<br>(データ操作)</th>
                                <th class="text-center">CRUD</th>
                                <th class="text-center">日本語</th>
                                <th class="text-center">コマンド</th>
                            </tr>
                            <tr>
                                <td class="text-center">INSERT</td>
                                <td class="text-center"><b>C</b>reate</td>
                                <td class="text-center">作成/保存</td>
                                <td class="text-center">INSERT INTO テーブル名(カラム1,...) VALUES(値1,...);</td>
                            </tr>
                            <tr>
                                <td class="text-center">SELECT</td>
                                <td class="text-center"><b>R</b>ead</td>
                                <td class="text-center">取得</td>
                                <td class="text-center">SELECT カラム名 FROM テーブル名;</td>
                            </tr>
                            <tr>
                                <td class="text-center">UPDATE</td>
                                <td class="text-center"><b>U</b>pdate</td>
                                <td class="text-center">更新</td>
                                <td class="text-center">UPDATE テーブル名 SET カラム名1=値1,...;</td>
                            </tr>
                            <tr>
                                <td class="text-center">DELETE</td>
                                <td class="text-center"><b>D</b>elete</td>
                                <td class="text-center">削除</td>
                                <td class="text-center">DELETE FROM テーブル名;</td>
                            </tr>
                        </table>
                    <h4>2. Data definition SQL(DDL)</h4>
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">SQLキーワード<br>(データ定義)</th>
                                <th class="text-center">使い方</th>
                                <th class="text-center">コマンド(DBの場合)</th>
                            </tr>
                            <tr>
                                <td class="text-center">CREATE</td>
                                <td class="text-center">新しいデータベースやテーブルの作成</td>
                                <td class="text-center">CREATE DATABASE DB名;</td>
                            </tr>
                            <tr>
                                <td class="text-center">DROP</td>
                                <td class="text-center">既存のデータベースやテーブルの削除</td>
                                <td class="text-center">DROP DATABASE DB名;</td>
                            </tr>
                        </table>
                    <h4>3. Data control SQL(DCL)</h4>
            </section>
            <br>
            <section>
                <h3 id="table"><span class="glyphicon glyphicon-tags"></span> テーブルの作成</h3>
                <p>データベースにテーブルを追加するコードを書いたファイルを作成します。</p>
                <p>(例) <i>create_table_bookstore_books.sql</i></p>
                <pre>
CREATE TABLE bookstore.books (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(100),
    price INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);</pre>
                <p>MySQLの<code>source</code>コマンドを用いて、ファイルを実行します。</p>
                <pre>mysql> source ~/environment/create_table_bookstore_books.sql</pre>
            </section>
            <br>
            <section>
                <h3 id="order"><span class="glyphicon glyphicon-tags"></span> ORDER BY</h3>
                <p>低い値から高い値へソートすることができます。</p>
                <pre>mysql> SELECT * FROM データベース名.テーブル名 ORDER BY カラム名;</pre>
                <p>逆に、以下のようにすれば高い値から低い値へソートすることができます。</p>
                <pre>mysql> SELECT * FROM データベース名.テーブル名 ORDER BY カラム名 DESC;</pre>
            </section>
            <br>
            <section>
                <h3><span class="glyphicon glyphicon-tags"></span> 集合関数</h3>
                    <h4 id="count">1. COUNT関数</h4>
                    <p>レコード数を数えることができます。</p>
                    <pre>mysql> SELECT COUNT(*) FROM データベース名.テーブル名;</pre>
                    <pre>
+----------+
| COUNT(*) |
+----------+
|        3 |
+----------+
</pre><br>
                    <h4 id="sum">2. SUM関数</h4>
                    <p>指定したカラムの合計値を出すことができます。</p>
                    <pre>mysql> SELECT SUM(カラム名) FROM データベース名.テーブル名;</pre>
                    <pre>
+---------------+
| SUM(カラム名) |
+---------------+
|          6160 |
+---------------+
</pre><br>
                    <h4 id="avg">3. AVG関数</h4>
                    <p>指定したカラムの平均値を出すことができます。</p>
                    <pre>mysql> SELECT AVG(カラム名) FROM データベース名.テーブル名;</pre>
                    <pre>
+---------------+
| AVG(カラム名) |
+---------------+
|     2053.3333 |
+---------------+
</pre>
            </section>
            <br>
            <section>
                <h3 id="join"><span class="glyphicon glyphicon-tags"></span> テーブルの結合</h3>
                <p>説明文</p>
                <pre>mysql> SELECT * FROM books INNER JOIN chapters ON books.id = chapters.book_id;</pre>
            </section>
            <br>
            <section>
                <h3 id="groupby"><span class="glyphicon glyphicon-tags"></span> GROUP BY</h3>
                <p>説明文</p>
                <pre>mysql> SELECT *, COUNT(*) FROM chapters GROUP BY book_id;</pre>
                <p>説明文</p>
                <pre>mysql> SELECT books.title, COUNT(*) AS number_of_chapters FROM chapters INNER JOIN books ON books.id = chapters.book_id GROUP BY book_id;</pre>
            </section>
        
        </div>
    </div>
    
</div>

@endsection