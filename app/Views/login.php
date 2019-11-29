<?php $validation = \Config\Services::validation(); ?>
<body>
    <?= $validation->listErrors(); ?>
    <div class="container">
        <div class="row m-b none">
            <h3 class="center-align darken-4">Ingreso al sistema</h3>
            <?= form_open('http://igniter.com:8080/Login/postLogin'); ?>
            <div class="input-field col s12">
                <?php 
                $User = array(
                    'name' => 'RUC',
                    'id' => 'RUC',
                    'class' => 'validate',
                    'placeholder' => 'RUC',
                    'required' => 'required',
                );
                echo form_input($User);
                echo form_label('Documento','RUC');
                ?>
            </div>
            <div class="input-field col s12">
                <?php
                $Password = array(
                    'type' => 'password',
                    'name' => 'password',
                    'id' => 'password',
                    'class' => 'validate',
                    'placeholder' => 'Contraseña',
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
            <?= form_close(); ?>
        </div>
    </div>
</body>
</html>