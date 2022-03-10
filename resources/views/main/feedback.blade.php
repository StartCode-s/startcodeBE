<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartCode | FeedBack</title>
    <!--Vendor CSS-->
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/addTestimoni.css') }}">
</head>

<body>

    <div id="app">

        <div class="logoStartCode">
            <img src="{{ url('assets/images/logoStartCode_WithoutName.png') }}" alt="">
            <h1>StartCode</h1>
        </div>
        <div class="testimoniForm">
            <h1>Add your review for more advanced <span class="special">StartCode</span> Working</h1>
            <p>Takes less than 10 minutes to give review for startcode company</p>


            @if (Session::has('message'))
                <div class="alert alert-{{ Session::get('status') }}" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif


            <div class="formAddReview">
                <form action="{{ route('addFeedback') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="yourName" placeholder="M Alfito Rahman" name="name">
                        <label for="yourName">Your Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="review" placeholder="Im like startCode" name="review">
                        <label for="review">Review</label>
                    </div>
                    <div class="selectProfile">
                        <label for="formFile" class="form-label">Choise Your Picture</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>

                    <div class="buttonSubmit">
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!--Vendor JS-->
    <!--Jquery-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!--Bootstrap Js-->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
