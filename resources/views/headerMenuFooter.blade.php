<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/basecss.css">
        
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript" src="js/libs/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/libs/jqueryui/jquery-ui.js"></script>    
        
    

    </head>
    <body>
        <div class="header">
            <div class ="icon">
                <a href="/">
                <img src="pix/logo1.jpg" width="240" height="200" alt="logo">
                </a>
            </div>
            <div id = "mapIcon">
                <img src="pix/map1.jpg" width="128" height="128" alt="mapIcon">
            </div>
            <div class="addresDiv">
                <p class="addresText">г. Город</p>
                <p class="addresText">ул. Улица 22</p>
            </div>
            <div class="numberDiv">
                <p class="numberText">8-800-555-35-55</p>
                <p class="numberText">8-800-800-80-80</p>
            </div>
          
        </div>
        <div class="menu">
            <table class="menuTable">
                <tr>
                    
                    <th class="cl">
                        <a href="/">
                            <p>Главная</p>
                                            </a>

                    </th>


                    <th class="cl">
                        <a href="menu">
                        <p>Меню</p>  
                        </a>
                    </th>
                    <th class="cl">
                        <a href = "actions">
                        <p>Акции</p>  
                        </a>
                    </th>
                    <th class="cl">
                        <a href="delivery">
                        <p>Доставка</p>  
                        </a>
                    </th>
                    <th class="cl">
                        <a href="contacts">
                        <p>Контакты</p>  
                        </a>
                    </th>
            </table>
        </div>

        @yield('content')
        
        <div class="footer">
            <div class ="icon">
                <a href="/">
                <img src="pix/logo1.jpg" width="240" height="200" alt="logo">
                </a>
            </div>
            <div class="numberDiv">
                <p class="numberText">8-800-555-35-55&emsp;&emsp;8-800-800-80-80</p>
            </div>
            <div class="messagers">
                
                        
                <img src="pix/messagers/fb.png" height="80" width="80"> 
                <img src="pix/messagers/twitter.png" height="80" width="80"> 
                <img src="pix/messagers/vk.png" height="80" width="80"> 
                <img src="pix/messagers/GoogleAlt.png" height="80" width="80"> 
                <img src="pix/messagers/Inst.png" height="80" width="80"> 
                <img src="pix/messagers/YouTube.png" height="80" width="80"> 
            </div>
        </div>
    </body>
</html>


