<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        New Tech||Product Adding
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
  
<?php include "adminheader.php"; ?>

   
    <h3 class="text-center p-3">Add Product</h3>

    <div class="container row">
        <div class="container col-lg-4 m-2 " >
            <div class="card">
                <div class="card-body">
                    <label for="formFileLg" class="form-label">Product Pictures</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
            </div>
        </div>
        <div class="container col-lg-7 mx-auto">

            <form class="row g-3">


                <div class="col-md-12">
                    <label for="productname" class="form-label">Product Name</label>
                    <input class="form-control" id="productname">
                </div>
                <div class="col-md-6">
                    <label for="Category" class="form-label">Category</label>
                    <select id="Category" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="Sub-category" class="form-label">Sub-category</label>
                    <select id="Sub-category" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="Category" class="form-label">Color</label>
                    <select id="Color" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="Storage" class="form-label">Storage</label>
                    <select id="Storage" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select id="inputStatus" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputCondition" class="form-label">Condition</label>
                    <select id="inputCondition" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="Description" class="form-label">Description</label>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="" id="Description" style="height: 100px" ></textarea>
                        <label for="floatingTextarea2Disabled"></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="Tags" class="form-label">Tags</label>
                    <input type="text" class="form-control" id="Tags">
                </div>
                <div class="col-md-6">
                    <label for="inputProvince" class="form-label">Province</label>
                    <select id="inputProvince" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">City</label>
                    <select id="inputCity" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-md-12">
                    <label for="Price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="Price">
                </div>
                
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">List Product</button>
                </div>
            </form>



        </div>
    </div>








    
    <script src="script.js"></script>
</body>

</html>