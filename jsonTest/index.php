<?php
$languages = json_decode(file_get_contents('languages.json'), true);

if(isset($_POST['language'])){
    $langKey = $_POST['language'];

    foreach($languages[$langKey] as $WordKey=>$WordValue){
        
        $languages[$langKey][$WordKey] = $_POST[$WordKey];
    }

    file_put_contents('languages.json', json_encode($languages, JSON_PRETTY_PRINT));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Json file test</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="index.php" method="post">
        <select id="language" name="language">
            <option>selecciona</option>
            <?php 
                foreach($languages as $language=>$lan){
                    ?>
                        <option value="<?=$language?>"><?=$lan['languageName']?></option>
                    <?php
                }
            ?>
        </select>
        <div id="languageSettings" name="languageSettings"></div>
        <button id="btnSubmit" style="display:none">guardar</button>
    </form>
</body>

<script>
    <?php echo 'var languages='.json_encode($languages).';';?>
    
    $(document).ready(function(){

        $('#language').change(function(e){
            var option = $(e.target);
            printLanguageKeys(option.val());
        });

        function printLanguageKeys(selLan){
            $('#languageSettings').empty();
            $.each(languages[selLan], function(key, value){
                $('#languageSettings').append(
                    '<label>'+key+'</label>:&nbsp;<input type="text" name="'+ key +'"value="'+ value+'"><br/>');
            });
            $('#btnSubmit').css('display', '');
        }
    });
</script>
</html>