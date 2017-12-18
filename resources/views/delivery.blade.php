
@extends('headerMenuFooter')

@section('content')
<div class="main">

    <form name="formJS">


        <table class="deliveryTable" align ="center">
            <tr>
                <td>
                    <p class="mainText">
                        Введите ваш номер телефона, что бы мы могли связаться с вами
                    </p>
                </td>


                <td>
                    <p class="mainText">
                        <input type="text" name="phone" size="40" data-rule = "required phone">
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="mainText">
                        Введите ваше имя, что бы мы знали, как к вам обратиться
                    </p>
                </td>


                <td>
                    <p class="mainText">
                        <input type="text" name="name" size="40" data-rule = "required name">
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="mainText">

                        <button>Заказать звонок</button>
                    </p>
                </td>
            </tr>

        </table>
    </form>
    <script type="text/javascript">
        var forms = document.getElementsByName('formJS');
        for(var j = 0; j < forms.length; j++){
        forms[j].addEventListener('submit', validator); 
    }
        var rules = {
        required: function (el){
        if (el.value !== ''){
        return 'ok';
        }
        return 'Есть пустые поля';
        },
        phone: function(el){
        var a = /^8\d{10}$/;
        if(a.test(el.value)){
            return 'ok';
        }
        return 'Неверно введен номер';
        },
        name: function(el){
        var a = /^[A-ZА-Я]{1}[a-zа-я]{1,}$/;
        if(a.test(el.value)){
            return 'ok';
        }
        return 'Неверно введено имя';
        }

        };

        function validator(e){
            e.preventDefault();
            var inputs = document.getElementsByTagName('input');
            for(var i = 0; i < inputs.length; i++){
                var rulesList = inputs[i].dataset.rule;
                    rulesList = rulesList.split(' ');
                    for (var j = 0; j < rulesList.length; j++){
                        if (rulesList[j] in rules){
                            var mes = rules[rulesList[j]](inputs[i]);
                            if (mes !== 'ok'){
                                window.alert(mes);
                                return;
                            }
                        }
                    }
                
            }
            window.alert('Звонок заказан');
        }
    </script>

</div>

@stop




