<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Booking Order</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-12">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-12">
                                <label for="customer_name">Customer</label>
                                <select id="id_customer" name="customer_name" class="form-control" disabled>
                                    <option selected>Choose...</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-12">
                                <label for="order_date">Order Date</label>
                                <select id="id_order" name="order_date" type="date" class="form-control">
                                    <option selected>Choose...</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="team">Team</label>
                            <select class="form-control" id="team_name">
                                <option></option>
                                <option>Team A</option>
                                <option>Team B</option>
                                <option>Team C</option>
                                <option>Team D</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">State</label>
                                <select class="custom-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>

                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </div>
            </div>
        </div>
    </div>