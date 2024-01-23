

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Book order</title>
        <meta charset="utf-8">
        <style>
            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            label {
                margin-top: 16px;
                display: block;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            textarea {
                height:200px;
            }
            .submit {
                margin-top: 10px;
            }
            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                width: 550px;
                margin: 0 auto;
            }
            .required-label {
                font-size: 13px;
                color: red;
                margin-top: 5px;
            }
            .message {
                color: green;
                margin-top: 15px;
            }
            h1{
                text-align: center;
            }
    
            
            .message .error {
                color: red;
            }
            .loading {
                width: 16px;
                padding-left: 15px;
                display: none;
            }
            #contact-form .disabled {
                color: white;
                background: gray;
            }
            @media(max-width: 1169px) {
                .container {
                    width: 50%;
                }
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Order Confirmation</h1>
            <form action="connect1.php" method="POST"  id="contact-form" enctype="multipart/form-data" onsubmit="return submitContactContent();">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="Enter First name.." class="field-required">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Enter last name.." class="field-required">

                <label for="mail">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email.." class="field-required">

                <label for="address">Event Address</label>
                <input type="text" id="address" name="eaddress" placeholder="Enter event address.." class="field-required">

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter phone number.." class="field-required">

                <label for="events">Events</label>
                <select id="select" name="events" class="field-required">
                    <option value="Not_Selected">Select Event</option>
                    <option value="Pre-Wedding">Pre-Wedding</option>
                    <option value="Wedding">Wedding</option>
                    <option value="Engagement">Engagement</option>
                    <option value="Birthday">Birthday</option>
                    <option value="Baby_Shoot">Baby Shoot</option>
                    <option value="Indoor">Indoor</option>
                    <option value="Outdoor">Outdoor</option>
                </select>

                <label for="duration">Event Duration</label>
                <select id="select-one" name="duration" class="field-required">
                    <option value="Not_Selected">Select Duration</option>
                    <option value="1H">1 Hour</option>
                    <option value="2H">2 Hours</option>
                    <option value="4H">4 Hours</option>
                    <option value="1D">1 Day</option>
                    <option value="2D">2 Days</option>
                    <option value="3D">3 Days</option>
                    <option value="4D">4 Days</option> 
                </select>

               <br>
               <br>

                <input type="submit" value="Confirm Order" name="submit" class="btn" id="submit">
            
                
            </form>
        </div>
    </body>
    <script>
    
        function validateForm(formId) {
            //Messages
            var warnings = {
                text: 'This text field is required',
                textarea: 'This textarea is required',
                select: 'Select an option',
                
               
            };
            //Init
            var validate = true;
            //Remove old warnings
            $("#" + formId + " .required-label").remove();
            $("#" + formId + " .field-required").each(function () {
                var myself = $(this);
                if (myself.prop("type").toLowerCase() === 'file' && myself.val() === '') {
                    myself.after('<div class="required-label">' + warnings.file + '</div>');
                    validate = false;
                }
                if (myself.prop("type").toLowerCase() === 'text' && myself.val() === '') {
                    myself.after('<div class="required-label">' + warnings.text + '</div>');
                    validate = false;
                }
                if (myself.prop("type").toLowerCase() === 'textarea' && myself.val() === '') {
                    myself.after('<div class="required-label">' + warnings.textarea + '</div>');
                    validate = false;
                }
                if (myself.prop("type").toLowerCase() === 'select' && myself.val() === '') {
                    myself.after('<div class="required-label">' + warnings.select + '</div>');
                    validate = false;
                }
            });
            
            return validate;
        }
        
        function submitContactContent() {
            $('#submit').addClass('disabled');
            $('.message').hide();
            $('#submit').attr('disabled', 'disabled');
            if (validateForm('contact-form')) {
                $('.loading').show();
                var formData = new FormData($('#contact-form')[0]);
                $.ajax({
                    url: '/index.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType: 'json',
                    success: function (response) {
                        $('.message').show();
                        if (response.flag == '1') {
                            $('.message').text(response.massage);
                        } else {
                            $('.message').html('<span class="error">'+response.massage+'</span>');
                        }
                        $('.loading').hide();
                    }
                });
            } else {
                console.log("The form is invalid !");
            }
            $('#submit').removeClass('disabled');
            $('#submit').removeAttr('disabled');
            return false;
        }
    
        
    </script>
</html>




