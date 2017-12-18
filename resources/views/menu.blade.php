
@extends('headerMenuFooter')

@section('content')

<div class="main" onload="setMenu">
    <script type="text/javascript" >
        
        $(window).resize(setMenu);
        $(document).ready(setMenu);
        function setMenu() {
            var w = parseInt($(window).width(), 10);
            $("#width").text(w);
            $("#height").text($(window).height());
            if (w < 1070) {
                $("#mob").show();
                $("#com").hide();
            } else {

                $("#mob").hide();
                $("#com").show();
            }
        }
// вызовем событие resize 
        $(window).resize();
        
            </script>

    <table id="com" class="sushiTable" align ="center">
        <col class ="colMenu">
        <?php $num = 0;
        ?>
        @foreach($sushis as $s)

        <?php if ($num == 0): $num = 1; ?>

            <tr>
            <?php else: $num--; ?>

            <?php endif ?>

            <td>
                <div class="sushiView">
                    <h1>{{$s->name}}</h1>
                    <img src="{{$s->picture}}" width="300" height="240">
                    <p class = "textSushi">{{$s->text}} </p>
                    <p class = "priceSushi">{{$s->price}} руб.</p>
                </div>
            </td>



            <?php if ($num == 0): ?>
            </tr> 
        <?php endif ?>

        @endforeach
        <?php if ($num != 0): ?>
            </tr>
        <?php endif ?>
    </table>

    <table id="mob" class="sushiTable" align ="center">
        <col class ="colMenu">
        <?php $num = 0;
        ?>
        @foreach($sushis as $s)

        <?php if ($num == 0): $num = 0; ?>

            <tr>
            <?php else: $num--; ?>

            <?php endif ?>

            <td>
                <div class="sushiView">
                    <h1>{{$s->name}}</h1>
                    <img src="{{$s->picture}}" width="600" height="480">
                    <p class = "textSushi">{{$s->text}} </p>
                    <p class = "priceSushi">{{$s->price}} руб.</p>
                </div>
            </td>



            <?php if ($num == 0): ?>
            </tr> 
        <?php endif ?>

        @endforeach
        <?php if ($num != 0): ?>
            </tr>
        <?php endif ?>
    </table>

</div>       
@stop