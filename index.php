<?php
    require_once "./database/book_management.php";
    $books=Get();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <!--bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <!--bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Book Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" 
                        style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active"  href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" contract.php">Contract</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-item">
                    <form action="/index.php" name="form" method="get">
                        <div class="field has-addons">
                            <div class="control">
                                <input class="input" type="text" placeholder="Find a Book" name="search" id="search" style="border-radius: 0px; border: 0px;">
                            </div>
                            <div class="control">
                                <input class="button" type="submit" value="Search" style="background-color:lightblue; border:0px; border-radius: 0px;">
                            </div>
                        </div>
                    </form>
                </div>
        </nav>
    </div>
    <div>
    <table class="table table-striped">
  <thead>
    <tr>
    <th colspan="4"><table class="table mb-0"></table>
      ID
      </th>
      <th colspan="4"><table class="table mb-0"></table>
      Titel
      </th>
      <th colspan="4"><table class="table mb-0"></table>
      Author
      </th>
      <th colspan="4"><table class="table mb-0"></table>
      ISBN
      </th>
      <th colspan="4"><table class="table mb-0"></table>
      Abailablity
      </th>
    </tr></thead>
  
  <tbody>
                <?php foreach ($books as $key => $value) : ?>
                    <tr>
                        
                        <td colspan="4"><table class="table mb-0"></table> <?php echo $value->id ?> </td>
                        <td colspan="4"><table class="table mb-0"></table> <?php echo $value->title ?> </td>
                        <td colspan="4"><table class="table mb-0"></table> <?php echo $value->author ?> </td>
                        <td colspan="4"><table class="table mb-0"></table> <?php echo $value->isbn ?> </td>
                        <td colspan="4"><table class="table mb-0"></table> <?php echo $value->abilable ?> </td>
                        
                        <td colspan="4"><table class="table mb-0"></table>
                            <button onclick="openModal(<?php echo $value->id ?>)" class="button" style="background-color: #dc3545; color: white; border-radius: 0px; border:0px;" data-target="modal-js-example">
                                <span class="icon">
                                    <i class="fas fa-minus-circle"></i>
                                </span>
                                <span>Delete<span>
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
    
    
  </tbody>
</table>
    </div>
    
</body>
</html>
