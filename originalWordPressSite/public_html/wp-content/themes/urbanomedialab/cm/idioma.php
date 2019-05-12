<div class="language-content">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="language">Idioma</label>
                <select class="custom-select" id="language" name="language">
                    <option>selecciona</option>
                    <?php 
                        foreach($languages as $wordKey=>$wordValue){
                            ?>
                                <option value="<?=$wordKey?>"><?=$wordValue['languageName']?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="languageName">Nombre del idioma</label>
                <input type="text" class="form-control" name="languageName">
            </div>
        </div>
    </div>
</div>

       