<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
        integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
        crossorigin="anonymous">

</head>

<body>
    <h1>TWILIO SMS</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="phone-number">Phone Number</label>
                        <input type="text" name="phone-number"
                            class="form-control>
                    </div>
                </div>
                <div class="
                            form-goup">
                        <div class="col">
                            <label for="message">Message Body</label>
                            <textarea name="message" id="" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send Message</button>

                </div>
    </form>
</body>

</html>
