<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        $(document).ready(function() {
            // Variable to hold request
            var request;

            // Bind to the submit event of our form
            $("#foo").submit(function(event){

                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();

                // Abort any pending request
                if (request) {
                    request.abort();
                }
                // setup some local variables
                var $form = $(this);

                // Let's select and cache all the fields
                var $inputs = $form.find("input, select, button, textarea");

                // Serialize the data in the form
                var serializedData = $form.serialize();

                // Let's disable the inputs for the duration of the Ajax request.
                // Note: we disable elements AFTER the form data has been serialized.
                // Disabled form elements will not be serialized.
                $inputs.prop("disabled", true);

                // Fire off the request to /form.php
                request = $.ajax({
                    url: "/tstAjax/form.php",
                    type: "post",
                    data: serializedData
                });

                // Callback handler that will be called on success
                request.done(function (response, textStatus, jqXHR){
                    // Log a message to the console
                    console.log("Hooray, it worked!");
                    $("#result").html(response);
                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown){
                    // Log the error to the console
                    console.error("The following error occurred: "+
                        textStatus, errorThrown
                    );
                    $("#result").html('Error occured');
                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function () {
                    // Reenable the inputs
                    $inputs.prop("disabled", false);
                });

            });
        });
    </script>
</head>
</head>
<body>
    <form id="foo">
        <label for="bar">A bar</label>
        <input id="bar" name="bar" type="text" value="" />
        <input type="submit" value="Send" />
            <!-- The result of the search will be rendered inside this div -->
        <div id="result"></div>
    </form>
<!-- Table  -->
<table class="table">
  <!-- Table head -->
  <thead>
    <tr>
      <th>#</th>
      <th><i class="fa fa-leaf mr-2 blue-text" aria-hidden="true"></i>Lorem</th>
      <th><i class="fa fa-leaf mr-2 teal-text" aria-hidden="true"></i>Ipsum</th>
      <th><i class="fa fa-leaf mr-2 indigo-text" aria-hidden="true"></i>Dolor</th>
    </tr>
  </thead>
  <!-- Table head -->

  <!-- Table body -->
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><i class="fa fa-diamond mr-2 grey-text" aria-hidden="true"></i>Cell 1</td>
      <td><i class="fa fa-download mr-2 grey-text" aria-hidden="true"></i>Cell 2</td>
      <td><i class="fa fa-book mr-2 grey-text" aria-hidden="true"></i>Cell 3</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><i class="fa fa-graduation-cap mr-2 grey-text" aria-hidden="true"></i>Cell 4</td>
      <td><i class="fa fa-gift mr-2 grey-text" aria-hidden="true"></i>Cell 5</td>
      <td><i class="fa fa-image mr-2 grey-text" aria-hidden="true"></i>Cell 6</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><i class="fa fa-magic mr-2 grey-text" aria-hidden="true"></i>Cell 7</td>
      <td><i class="fa fa-table mr-2 grey-text" aria-hidden="true"></i>Cell 8</td>
      <td><i class="fa fa-edit mr-2 grey-text" aria-hidden="true"></i>Cell 9</td>
    </tr>
  </tbody>
  <!-- Table body -->
</table>
<!-- Table  -->
</body>
</html>
