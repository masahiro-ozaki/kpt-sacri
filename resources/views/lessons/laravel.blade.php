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
                        <a style="cursor:pointer;">▼ Laravel</a>
                    </div>
                    
                    <!-- 折り畳まれ部分1 -->
                    <div id="open1" style="display:none;clear:both;">
                        <ul style="list-style-type: none">
                            <li>
                                <a href="#aaa">◇ AAA</a>
                            </li>
                            <li>
                                <div onclick="obj=document.getElementById('open2').style; obj.display=(obj.display=='none')?'block':'none';">
                                <a href="cursor:pointer";>▽ BBB</a>
                                </div>
                                
                                <div id="open2" style="display:none;clear:both;">
                                    <ul style="list-style-type: none">
                                        <li><a href="#ccc">1. CCC</a></li>
                                        <li><a href="#ddd">2. DDD</a></li>
                                        <li><a href="#eee">3. EEE</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </ul>
        </aside>
    </div>
    
    <!--***************************************左側；メインコンテンツ***************************************-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-1">
        <div id="main">
            <h2>Laravel</h2>
            
            <section>
                <h3 id="aaa"><span class="glyphicon glyphicon-tags"></span> Webアプリケーションとは</h3>
                    <p>Webアプリケーションとは、ユーザがHTTPリクエストである4つのCRUDメソッドを用いて、Web上のリソースを操作できるアプリケーションのことです。</p>
                    <img src=/jet-kun_image/mvc.png class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
                    
                <h3 id="aaa"><span class="glyphicon glyphicon-tags"></span> フレームワーク使用の流れ</h3>
                    <h4 id="ccc">1. Laravelプロジェクトの作成</h4>
                        <pre>
$ cd ~/environment/
$ composer create-project laravel/laravel ./プロジェクト名 "5.5.*" --prefer-dist</pre>
                    <p><span class="glyphicon glyphicon-floppy-disk"></span> Git</p>
                    <pre>$ cd ~/environment/プロジェクト名</pre>
                    <pre>$ git init</pre>
                    <pre>
$ git add .
$ git commit -m "init Laravel Project"</pre>
                    <br>
                    <h4 id="ddd">2. データベース設定</h4>
                    <p><i>.env</i></p>
                    <pre>
DB_DATABASE=データベース名
DB_USERNAME=root
DB_PASSWORD=</pre>
                    <p>データベースを作成します。</p>
                    <pre>
// Start MySQL server
$ sudo service mysqld start

// Login
$ mysql -u root

// Create database
mysql> CREATE DATABASE `データベース名`;</pre>
                    <p>tinkerによるデータベース接続の確認もできます。</p>
                    <pre>>>> DB::connection();</pre>
                    <p>タイムゾーンの設定を行います。</p>
                    <p><i>config/app.php</i> (timezone excerpt)</p>
                    <pre>'timezone' => 'Asia/Tokyo',</pre>
                    <p><span class="glyphicon glyphicon-floppy-disk"></span> Git</p>
                    <pre>
$ git add .
$ git commit -m "set timezone"</pre>
                    <br>
                    <h4 id="eee">3. Model</h4>
                    <p>テーブル設計前の初期設定を行います。</p>
                    <p><i>app/Providers/AppServiceProvider.php</i></p>
                    <pre>
    public function boot()
    {
        \Schema::defaultStringLength(191);
    }</pre>
                    <p>まず、migrationファイルを作成し、migrationを実行します。</p>
                    <pre>
// migrationファイルの作成
$ php artisan make:migration [migrationファイル名] --create=[テーブル名(複数形)] 

// migrationの実行
$ php artisan migrate</pre>
                    <p>次に、モデルを作成します。</p>
                    <pre>$ php artisan make:model [モデル名(頭は大文字)]</pre>
                    <p>これで<i>app/</i>直下にモデルが生成されます。</p>
                    <p>モデルで使われるCRUDファンクションは以下のようになります。</p>
                    <table class="table table-striped">
                            <tr>
                                <th class="text-center">CRUDファンクション</th>
                                <th>使い方</th>
                            </tr>
                            <tr>
                                <td class="text-center">all</td>
                                <td>全てのレコード取得</td>
                            </tr>
                            <tr>
                                <td class="text-center">find</td>
                                <td>idを指定して検索</td>
                            </tr>
                            <tr>
                                <td class="text-center">where</td>
                                <td>検索条件を指定など</td>
                            </tr>
                            <tr>
                                <td class="text-center">count</td>
                                <td>件数を取得</td>
                            </tr>
                            <tr>
                                <td class="text-center">first</td>
                                <td>最初のレコードのみ取得</td>
                            </tr>
                            <tr>
                                <td class="text-center">create,save</td>
                                <td>レコードの作成</td>
                            </tr>
                            <tr>
                                <td class="text-center">insert</td>
                                <td>複数のデータを一括作成</td>
                            </tr>
                            <tr>
                                <td class="text-center">update,save</td>
                                <td>データの更新</td>
                            </tr>
                            <tr>
                                <td class="text-center">delete,destroy</td>
                                <td>データの消去</td>
                            </tr>
                        </table>
                        <p>これらのファンクションは、<code>モデル名::ファンクション名</code>や<code>モデルのインスタンス->ファンクション名</code>のようにして使うことができます。</p>
                        <p><span class="glyphicon glyphicon-floppy-disk"></span> Git</p>
                    <pre>
$ git add .
$ git commit -m "model"</pre>
                    <br>
                    <h4 id="eee">4. Router</h4>
                    <h4 id="eee">5. Controller and View</h4>
            </section>
            <br>
        
        </div>
    </div>
    
</div>

@endsection