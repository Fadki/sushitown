
@extends('headerMenuFooter')

@section('content')
<div class="main">
    <div class="actionDiv">
        <ul>

            <?php
            $filename = "actions.txt";
            if (($handle = fopen($filename, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);
                    for ($c = 0; $c < $num; $c++) {
                        ?>
                        <li class="acionText">
                            <?php
                            echo $data[$c] . "<br />\n";
                            ?>
                        </li>

                        <?php
                    }
                }
                fclose($handle);
            }
            ?>
            <li class="acionText">

                Укажи email и получи промо-код со скидкой!
                <form class = "formEmail" action="" method="get">

                    <input  class="textEmail" type="text" name="email">
                    <button class="buttonSubmitEmail" onclick="checkMail()">Отправить</button>
                </form>
            </li>
        </ul>
    </div>



</div>
<script>
    function checkMail() {
        var http = new XMLHttpRequest();
        var email = document.getElementsByName("email")[0].value;
        var url = "/api/check?email=" + email;
        http.onreadystatechange = () => {
            if (http.readyState == 4) {
                window.alert(http.responseText);
            }
        }
        http.open("GET", url, true);
        http.send();
    }
</script>

@stop




