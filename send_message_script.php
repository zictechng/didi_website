<script type="text/javascript">
//send trade process call script goes here
$(document).ready(function() {
    $('#btn_send').on('click', function() {
        event.preventDefault();

        if ($('#f_name').val() == "") {
            alert("Full Name Required");
            $("#f_name").focus();
        } else
        if ($('#c_email').val() == "") {
            alert("Valid Email Required");
            $("#c_email").focus();
        } else
        if ($('#c_Phone').val() == "") {
            alert("Valid Phone Number Required");
            $("#c_Phone").focus();
        }
        else
        if ($('#c_Subject').val() == "") {
            alert("Contact Purpose Required");
            $("#c_Subject").focus();
        }
        else
        if ($('#c_message').val() == "") {
            alert("Message Required");
            $("#c_message").focus();
        }
        else
        if ($('#code_entered').val() == "") {
            alert("Security Code Required");
            $("#code_entered").focus();
        }
         else {
            $.ajax({
                url: 'process_message_call.php',
                type: 'POST',
                data: $('#form_contact').serialize(),
                beforeSend: function() {
                    $("#error").fadeOut();
                    $("#btn_send").html('Send... <i class="fa fa-circle-o-notch fa-spin-right"></i>');
                },
                success: function(response) {
                    if (response == "2") {

                        alert('Failed ! Wrong security code entered');
                        $("#msg_success").html(
                            '<div class="alert alert-danger"> Failed ! Wrong security code entered &nbsp;</div>'
                        );
                        $("#btn_send").html(' &nbsp; Send a Message <i class="fa fa-angle-right"></i>');
                        $("#btn_close").show();
                        //setTimeout(' window.location.href = "index";',6000);
                    } else if (response == "3") {
                        //alert(response);

                        //alert('Sorry, Something went wrong! Try again');
                        $("#msg_success").html(
                            '<div class="alert alert-warning"><span class="fa fa-times" style="font-size: 1.2rem;> Sorry, Something went wrong! Try again.</span> &nbsp; </div>'
                        );
                        $("#btn_send").html('&nbsp; Send a Message');
                        $("#btn_close").show();
                        //setTimeout(' window.location.href = "index";',6000);
                    } else if (response == "1") {
                        alert('Message Sent');
                        $("#msg_success").html(
                            '<div class="alert alert-success"><span class="fa fa-check" style="font-size: 1.2rem;"> Message sent Successfully! We will get in touch shortly.</span> &nbsp; </div>'
                        );
                        $("#btn_send").html('Send a Message <i class="fa fa-angle-right"></i>');
                        document.getElementById("form_contact").reset();
                        //setTimeout('window.location.href = "index";',3000);
                    } else {
                        $("#error").fadeIn(1000, function() {
                            $("#error").html(
                                '<div class="alert alert-danger"> &nbsp; ' +
                                response + ' Operation Failed</div>');
                            $("#btn_send").html(
                                '<i class="fa fa-info"></i> &nbsp; Send a Message');
                        });
                    }
                }
            });
        }
    });
});
</script>