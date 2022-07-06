<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="Assets/Style/style.css">

    <title>Prepare your travel | canadian-visits.com</title>
</head>

<body>
    <div class="req-body">
        <header>
            <div class="container d-flex">
                <div class="col">
                    <img src="Assets/img/logo-new.png" alt="">
                </div>
                <div class="col contact-header">
                    <button class="btn-contact">
                        <a href="">Contact us</a>
                    </button>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="step4">
                        <h1 class="formTitle">GET STARTED</h1>
                        <form>
                            <div class="item">
                                <label for="citizenship">What is your citizenship?</label>
                                <input type="text" name="citizenship" id="citizenship" class="form-control" required="">
                                <p class="error-citizen">Select your nationality from the proposed list</p>
                            </div>
                            <div class="item">
                                <p>Select reason(s) for travel to United States:</p>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="reason[]" id="reason4" value="Transit">
                                    <label for="reason4" class="reason4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M368 128h-47.95l.0123-80c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48L128 128H80C53.5 128 32 149.5 32 176v256C32 458.5 53.5 480 80 480h16.05L96 496C96 504.9 103.1 512 112 512h32C152.9 512 160 504.9 160 496L160.1 480h128L288 496c0 8.875 7.125 16 16 16h32c8.875 0 16-7.125 16-16l.0492-16H368c26.5 0 48-21.5 48-48v-256C416 149.5 394.5 128 368 128zM176.1 48h96V128h-96V48zM336 384h-224C103.2 384 96 376.8 96 368C96 359.2 103.2 352 112 352h224c8.801 0 16 7.199 16 16C352 376.8 344.8 384 336 384zM336 256h-224C103.2 256 96 248.8 96 240C96 231.2 103.2 224 112 224h224C344.8 224 352 231.2 352 240C352 248.8 344.8 256 336 256z"/></svg> Transit</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="reason[]" id="reason3" value="Business">
                                    <label for="reason3" class="reason3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M320 336c0 8.844-7.156 16-16 16h-96C199.2 352 192 344.8 192 336V288H0v144C0 457.6 22.41 480 48 480h416c25.59 0 48-22.41 48-48V288h-192V336zM464 96H384V48C384 22.41 361.6 0 336 0h-160C150.4 0 128 22.41 128 48V96H48C22.41 96 0 118.4 0 144V256h512V144C512 118.4 489.6 96 464 96zM336 96h-160V48h160V96z"/></svg> Business</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="reason[]" id="reason2" value="Visit">
                                    <label for="reason2" class="reason2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 93.68C192 59.53 221 0 256 0C292 0 320 59.53 320 93.68V160L497.8 278.5C506.7 284.4 512 294.4 512 305.1V361.8C512 372.7 501.3 380.4 490.9 376.1L320 319.1V400L377.6 443.2C381.6 446.2 384 450.1 384 456V497.1C384 505.7 377.7 512 369.1 512C368.7 512 367.4 511.8 366.1 511.5L256 480L145.9 511.5C144.6 511.8 143.3 512 142 512C134.3 512 128 505.7 128 497.1V456C128 450.1 130.4 446.2 134.4 443.2L192 400V319.1L21.06 376.1C10.7 380.4 0 372.7 0 361.8V305.1C0 294.4 5.347 284.4 14.25 278.5L192 160L192 93.68z"/></svg> Visit</label>
                                </div>
                                <p class="error-reason">Please specify the reason (s) for your travel</p>
                            </div>
                            <div class="btn-item">
                                <button type="button" id="form-step4">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <p>24/7 Support, assistance.
                www.usa-visit.us</p>
        </div>
        <div class="wrapper-footer">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="image-holder">
							<img src="images/logo.png" alt="">
						</div>
						<div class="image-ssl">
							<img src="images/ssl.png" alt="">
						</div>
						<div class="copy-right">
							© Copyright 2021 | All rights reserved - <a href="javascript:void(0)" onClick="$('#terms-and-conditions').modal('show');">General terms and conditions of sale</a> | <a href="javascript:void(0)" onClick="$('#privacy-policy').modal('show');">Privacy Policy</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
    </div>











    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>