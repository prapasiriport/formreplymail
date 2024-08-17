<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internship Application</title>
    <link rel="stylesheet" href="styles.css"> 

  </head>
  <body>

    <div class="container">
        <div class="apply-box">
            <h1>Internship Application <span class="title">(Web)</span> </h1>

                <form action="sendmail.php" method="POST">

                    <div class="form-container">
                    <div class="form-control">
                        <label for="fullname">Full Name:</label>
                        <input type="text" name="full_name" id="fullname" placeholder="Enter Full Name" required/>
                    </div>
                    <div class="form-control">
                        <label for="email_address">Email Address:</label>
                        <input type="email" name="email" id="email_address" placeholder="Enter Email Address" required/>
                    </div>
                    <div class="form-control">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" maxlength="10" placeholder="Enter Phone Number" required">
                    </div>
                    <div class="form-control">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" required rows="3" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="form-control">
                    <label for="resume">Attach Resume:</label> 
                    <input type="file" name="resume" id="resume"/>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="submitContact">Apply Now</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        var messageText = "<?= $_SESSION['status'] ?? '';  ?>";
        if(messageText != ''){
            Swal.fire({
                title: "Thank you!",
                text: messageText,
                icon: "success"
            });
            <?php unset($_SESSION['status']); ?>
        }

    </script>

  </body>
</html>