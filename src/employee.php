<!-- TODO Employee view -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <!-- JavaScript de Employee -->
    <script src="../assets/js/dashboard.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Employee</title>
</head>

<body>
    <?php require_once "../assets/html/header.html"; ?>

    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Email address</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" value="" id="validationCustom03" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Gender</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>Male</option>
                <option>Female</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" value="" id="validationCustom05" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>

        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Street Address</label>
            <input type="text" class="form-control" value="" id="validationCustom06" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">State</label>
            <input type="text" class="form-control" value="" id="validationCustom07" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Age</label>
            <input type="text" class="form-control" value="" id="validationCustom08" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Postal Code</label>
            <input type="number" class="form-control" id="validationCustom09" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="validationCustom10"  required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <input class="btn btn-primary" type="button" value="Submit"/>
        </div>
        <!-- <div class="col-12">
            <input class="btn btn-primary" type="submit" value="Return" name="Return"/>
        </div> -->
        <div class="col-12">
            <input class="btn btn-primary" type="button" value="Return" onclick="history.go(-1)">
            <!-- <script> function GPS(msg) {
                this.send_msg = function() {
                window.alert(msg);
                }
            }
                var lost = new GPS("You are lost!");
                lost.send_msg();</script> -->
        </div>

    </form>

    <?php require_once "../assets/html/footer.html" ?>
</body>

</html>