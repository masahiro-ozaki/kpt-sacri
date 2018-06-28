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
                        <a style="cursor:pointer;">▼ Others</a>
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
            <h2>Others</h2>
            
            <section>
                <h3 id="aaa"><span class="glyphicon glyphicon-tags"></span> AAA</h3>
                <p>ここに文章を挿入します。</p>
                <pre>ここにコードを挿入します。</pre>
                <code>こうやって文字を赤くもできます。</code>
            </section>
            <br>
            <section>
                <h3 id="bbb"><span class="glyphicon glyphicon-tags"></span> BBB</h3>
                    <h4 id="ccc">1. CCC</h4>
                    <h4 id="ddd">2. DDD</h4>
                    <h4 id="eee">3. EEE</h4>
            </section>
        
        </div>
    </div>
    
</div>

@endsection