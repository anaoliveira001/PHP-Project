
<h1>Blog</h1>
<h2>Recent Posts</h2>

<form action="db/insert.php" method="get">
        <div class="container">
            <div class="row">
                <div class="col">  
                
                    <label for="title">Title</label>
                    <input  name="title" id="post">
                    <input type="text" name="post" id="post">
                    <input type="submit" value="Inserir">
                </div>
            </div>
        </div>
    </form>


    <?php include('db/selectPosts.php')?>