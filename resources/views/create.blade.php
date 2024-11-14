<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Form</title>
</head>
<body>
    <div class="container mt-5">
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="inputName1" value="" placeholder="Enter name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail1" value="" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputImage">Upload Image</label>
                        <input type="file" name="image" class="form-control-file" id="inputImage">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                </div>             
           
        
                <div class="col-md-4">
                    <div class="form-group">
                        <label >Birth Date</label>
                        <input type="date" value="" name="birth_date" class="form-control"  >
                    </div>
                </div>             
           

        
            <label for="gender">Gender</label> <br>
                <div id="gender" class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  name="gender" id="other" value="other">
                    <label class="form-check-label" for="other">
                        Other
                    </label>
                </div>
            </div>       
         </div>



         <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
               
            </div>
        </div>
    </div>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>