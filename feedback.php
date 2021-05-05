<html>

<head>
   
    <style>
    #outer {
        height: 300px;
        width: 400px;
        border: 1px solid;
        margin: 100px;
        background-color: yellow;

    }

    body {
        background-size: cover;
        background-repeat: no-repeat;
    }

    .but {
        color: #fff;
        background-color: #00f;
        width: 100px;
    }

    .sac {
        float: left;
    }
    </style>

    <script>
    function SubmitForm() {
        document.FeedbackForm.submit();
        document.FeedbackForm.reset();

    }
    </script>
<title>Coc Vs Study</title>
    <link rel="shortcut icon" type="image/jpg" href="image/title.png" />
</head>

<body>

    <!-- including navbar -->
    <?php 
    include 'starter.html';
include "header.php";
?>
    <div class="container my-4">

        <form name="FeedbackForm" action="feedinsert.php" method="POST">

            <div class="form-group col-md-6 mx-auto">
                <label for="inputEmail4" class="sac">Name</label>
                <input type="text" name="na" class="form-control" id="name" placeholder="Name">
            </div>


            <div class="form-group col-md-6 mx-auto">
                <label for="inputEmail4" class="sac">Email</label>
                <input type="email" name="gm" class="form-control" id="inputEmail4" placeholder="Email">
            </div>

            <div class="form-group col-md-6 mx-auto">
                <label for="exampleFormControlTextarea1" class="sac"><b>Write Your Feedback</b></label>
                <textarea name="feedback" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group col-md-6 mx-auto">
            <button type="button" class="btn btn-primary" id="btnsubmit" onclick="SubmitForm()">Submit</button>
            </div>
        </form>
    </div>


    <!-- including footer -->
    <?php
include "footer.php";
?>

</body>

</html>

