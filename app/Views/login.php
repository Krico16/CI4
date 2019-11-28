<?php $validation = \Config\Services::validation(); ?>
<body>
    <?= $validation->listErrors(); ?>
    <div class="container">
        <div class="row m-b none">
            <h3 class="center-align darken-4">Ingreso al sistema</h3>
            <?php echo form_open('Login'); ?>
            <div class="input-field col s12">
                <?php 
                $User = array(
                    'name' => 'username',
                    'id' => 'username',
                    'class' => 'validate',
                    'placeholder' => 'DNI - RUC o Documento de identidad',
                    'required' => 'required',
                );
                echo form_input($User);
                echo form_label('Documento','username');
                ?>
            </div>
            <div class="input-field col s12">
                <?php
                $Password = array(
                    'type' => 'password',
                    'name' => 'password',
                    'id' => 'password',
                    'class' => 'validate',
                    'placeholder' => 'contraseña',
                    'required' => 'required'
                );
                echo form_input($Password);
                echo form_label('Contraseña','password');
                ?>
            </div>
            <div class="input-field col s12">
                <?php 
                $button = array(
                    'class' => 'waves-effect waves-light btn',
                    'value' => 'Ingresar'
                );
                echo form_submit($button);
                ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>