       <br>
      <br>
      <br>
      <div class="row">
      <br>
        <div class="col-3"><a href="<?=base_url?>">Login</a></div>
            <div class="col-6">
                <form class="form-signin" action="<?=base_url?>usuario/save" method="POST">                    
                    <h1 class="h3 mb-3 font-weight-normal text-center">Registrarse</h1>
                    <label for="inputNombres" >Nombres</label>
                    <br>
                    <input type="text" id="inputNombres" name="nombres" class="form-control" placeholder="Nombres" required autofocus>
                    <br>
                    <label for="inputApellidoP" >Apellido Paterno</label>
                    <br>
                    <input type="text" id="inputApellidoP" name="apellido_p" class="form-control" placeholder="Apellido Paterno" required >
                    <br>
                    <label for="inputApellidoM" >Apellido Materno</label>
                    <br>
                    <input type="text" id="inputApellidoM" name="apellido_m" class="form-control" placeholder="Apellido Materno" required >
                    <br>
                    <label for="selectGenero" >Genero</label>
                    <br>
                    <select class="form-control" id="selectGenero" name="genero">
                        <?php 

                        foreach ($valuesGenero as $contentGenero ) {                            

                            echo '<option value="'.$contentGenero['id'].'">'. $contentGenero['nombre'].'</option>';
                        }
                        ?>
                        
                    </select>
                    <br>
                    <label for="inputEdad" >Edad</label>
                    <br>
                    <input type="number" id="inputEdad" name="edad" class="form-control" placeholder="Edad" required >
                    <br>
                    <label for="selectGenero" >Estado Civil</label>
                    <br>
                    <select class="form-control" id="selectGenero" name="estado_civil">
                        <option selected value="">Seleccionar</option>                        
                        <?php 

                        foreach ($valuesestadoCivil as $contentEstadoCivil ) {                            

                            echo '<option value="'.$contentEstadoCivil['id'].'">'. $contentEstadoCivil['nombre'].'</option>';
                        }
                        ?>                       
                    </select>

                    <br>
                    <label for="inputEmail" >Email</label>
                    <br>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required >
                    
                    <label for="inputPassword" class="sr-only">Password</label>
                    <br>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <br>                
                    <br>
                    <label for="selectIntereses" >Nivel de intereses</label>
                    <br>
                    <select class="form-control" id="selectIntereses" name="nivel_intereses">
                    <?php 

                        foreach ($valuesNivelInteres as $contentNivelInteres ) {                            

                            echo '<option value="'.$contentNivelInteres['id'].'">'. $contentNivelInteres['nombre'].'</option>';
                        }
                    ?>    
                    </select>
                    <br>
                    <label for="selectOpcIntereses" >Selecciona una opcion</label>
                    <br>
                    <select class="form-control" id="selectOpcIntereses" name="opc_nivel_interes">
                        <option value="0">No aplica</option>
                        <option value="1">Preparatoria</option>
                        <option value="2">Licenciatura</option>
                        <option value="3">Posgrado</option>
                    </select>
                    <br>
                    <br>

                    <button class="btn btn-lg btn-primary " type="submit">Registrar</button>
                    
                </form>

            </div>
        <div class="col-3"></div>
      </div>