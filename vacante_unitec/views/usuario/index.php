<br>
<br>
      <br>
      <br>
      <div class="row">
        <div class="col"></div>
            <div class="text-center col-6">
                <form class="form-signin" action ="<?=base_url?>usuario/login" method="POST">                    
                    <h1 class="h3 mb-3 font-weight-normal">Autenticate</h1>
                    <label for="inputEmail" >Email</label>
                    <br>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
                    
                    <label for="inputPassword" >Password</label>
                    <br>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <br>                    
                    <button class="btn btn-lg btn-primary " type="submit">Ingresar</button>
                    
                </form>

            </div>
        <div class="col-3"></div>
      </div>

      <br>
      <br>
      <div class="row">
        <div class="col"></div>
            <div class="text-center col-6">
                        
                    <a href="<?=base_url?>usuario/registro">Registrarse</a>
                    

            </div>
        <div class="col-3"></div>
      </div>
