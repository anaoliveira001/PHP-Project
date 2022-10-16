
        <div class="col-sm p-3 min-vh-100">
            <h1 class="account">MY ACCOUNT</h1>
            <button id="create_post_btn" type="button" class="btn btn-light" onclick="create_post('div_insertPost')">
            <i class="bi bi-plus-square-fill"></i> Create Post</button>
                
            <form action="db/insertPost.php" method="get">
            
                <div class="container">
                    <div class="row">
                        <div class="col">  

                        <div id="div_insertPost" style="display:none" >

                            <label for="categories">Choose a category:</label>
                            <select name="category" id="category" >
                                <option value="1">Entertainment</option>
                                <option value="2">Food</option>
                                <option value="3">Gamming</option>
                                <option value="4">Lifestyle</option>
                                <option value="5">Sports</option>
                                <option value="6">Technology</option>

                         

                            </select>
                            <br>
                            <br>
                          
                            <label for="title">Title</label>
                            <input name="title" id="post">
                            <input type="text" name="post" id="post">
                            <input type="submit" value="Inserir">


                            </div>
                         
                        </div>
                    </div>
                </div>
            </form>


        
                </div>
            </div>
        </div>

   
<?php 
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'insertok'){ ?>

    <div class="alert alert-success" role="alert">
     Post criado com sucesso! Consulte o feed!
    </div>

    <?php
  }else if($r == 'inserterror'){ ?>

    <div class="alert alert-danger" role="alert">
     Ups! Erro! Verifique todos os campos e tente novamente!
    </div>


    <?php
  }
}?>
