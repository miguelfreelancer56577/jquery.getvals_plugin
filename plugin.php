<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="plugin/jquery.getvals_plugin.js"></script>
        <script>
            $(function(){
                //$(".ts2").setValues("2");
                $("textarea").getValues();
                //$("#select2").setValues(2);
                //$(".ts3").setValues();
                //$(".ts2").setValues("14:58");
                //$("").setValues();
            });
        </script>
    </head>
    <body>
        <p>hola mundo</p>
        <textarea name="" id="a1" cols="30" rows="10" class="ts2"></textarea>
        <textarea name="" id="a2" cols="30" rows="10" class="ts2"></textarea>
        <input type="text" class="ts2" name="txt1">
        <input type="password" class="ts2" name="txt1">
        <input type="date" class="ts2" name="txt1">
        <input type="time" class="ts2" name="txt1">
        <input type="hidden" class="ts2" name="txt1">
        <hr>
        <input type="checkbox" class="ts2" name="chb1" value="23">
        <input type="checkbox" class="ts2" name="chb2">
        <input type="checkbox" class="ts2" name="chb3">
        <input type="checkbox" class="ts2" name="chb4" value="23">
        <hr>
        <input type="radio" class="ts3" name="chb" value="luis estra">
        <input type="radio" class="ts2" name="chb" value="2">
        <input type="radio" class="ts2" name="chb" value="3">
        <input type="radio" class="ts2" name="chb" value="4">
        <hr>
        <select name="" id="select" multiple="" class="ts2">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
        </select>
        <select name="actas" class="ts2" multiple="">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
        </select>
        <select name="" id="select2" class="ts2">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
        </select>
    </body>
</html>
