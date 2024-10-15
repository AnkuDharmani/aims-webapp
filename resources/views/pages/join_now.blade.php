@include('layouts.header')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        <h1 class="text-white display-3">Join Our Team</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Join Our Team</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container mt-5">
    <div class="">
        <div class="">
            <h4 class="mb-3">Job Application Form</h4>
        </div>
        <div class="">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form id="jobApplicationForm">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name <sup style="color:red">*</sup></label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name<sup style="color:red">*</sup></label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email<sup style="color:red">*</sup></label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <span class="text-danger" id="emailError"></span>

                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile<sup style="color:red">*</sup></label>
                    <input type="number" name="mobile" id="mobile" class="form-control" required>
                    <span class="text-danger" id="mobileError"></span>
                </div>
                <div class="mb-3">
                    <label for="street" class="form-label">Street<sup style="color:red">*</sup></label>
                    <input type="text" name="street" id="street" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="street_code" class="form-label">Street Code<sup style="color:red">*</sup></label>
                    <input type="text" name="street_code" id="street_code" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="city_town_suburb" class="form-label">City, Town, or Suburb<sup style="color:red">*</sup></label>
                    <input type="text" name="city_town_suburb" id="city_town_suburb" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="postcode_zipcode" class="form-label">Postcode or Zipcode<sup style="color:red">*</sup></label>
                    <input type="text" name="postcode_zipcode" id="postcode_zipcode" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country<sup style="color:red">*</sup></label>
                    <input type="text" name="country" id="country" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="state_region_province" class="form-label">State, Region, or Province<sup style="color:red">*</sup></label>
                    <input type="text" name="state_region_province" id="state_region_province" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="linkedin_url" class="form-label">LinkedIn URL<sup style="color:red">*</sup></label>
                    <input type="url" name="linkedin_url" id="linkedin_url" class="form-control">
                </div>
                <h4 class="mb-2">Questions</h4>
                <!-- Question 1 -->
                <div class="mb-3">
                    <label for="requirements" class="form-label">1) Do you need requirements for this position?<sup style="color:red">*</sup></label>
                    <select name="requirements" id="requirements" class="form-control form-select">
                        <option value="">Select...</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <!-- Question 2 -->
                <div class="mb-3">
                    <label class="form-label">2) What days are you available to work?<sup style="color:red">*</sup></label><br>
                    <div class="form-check">
                        <input type="checkbox" name="availability_days[]" value="Monday" class="form-check-input" id="monday">
                        <label class="form-check-label" for="monday">Monday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="availability_days[]" value="Tuesday" class="form-check-input" id="tuesday">
                        <label class="form-check-label" for="tuesday">Tuesday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="availability_days[]" value="Wednesday" class="form-check-input" id="wednesday">
                        <label class="form-check-label" for="wednesday">Wednesday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="availability_days[]" value="Thursday" class="form-check-input" id="thursday">
                        <label class="form-check-label" for="thursday">Thursday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="availability_days[]" value="Friday" class="form-check-input" id="friday">
                        <label class="form-check-label" for="friday">Friday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="availability_days[]" value="Saturday" class="form-check-input" id="saturday">
                        <label class="form-check-label" for="saturday">Saturday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="availability_days[]" value="Sunday" class="form-check-input" id="sunday">
                        <label class="form-check-label" for="sunday">Sunday</label>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="mb-3">
                    <label for="driving_experience" class="form-label">3) Tell us about your commercial driving and delivery experience<sup style="color:red">*</sup></label>
                    <textarea name="driving_experience" id="driving_experience" rows="4" class="form-control"></textarea>
                </div>

                <!-- Question 4 -->
                <div class="mb-3">
                    <label for="years_with_license" class="form-label">4) Number of years with a driver's license<sup style="color:red">*</sup></label>
                    <input type="number" name="years_with_license" id="years_with_license" class="form-control">
                </div>

                <!-- Question 5 -->
                <div class="mb-3">
                    <label for="years_driving_commercial" class="form-label">5) Number of years driving large commercial vehicles<sup style="color:red">*</sup></label>
                    <textarea name="years_driving_commercial" id="years_driving_commercial" rows="4" class="form-control"></textarea>
                </div>

                <!-- Question 6 -->
                <div class="mb-3">
                    <label for="customer_service_experience" class="form-label">6) Tell us about your customer service experience<sup style="color:red">*</sup></label>
                    <textarea name="customer_service_experience" id="customer_service_experience" rows="4" class="form-control"></textarea>
                </div>

                <!-- Question 7 -->
                <div class="mb-3">
                    <label for="skill_level" class="form-label">7) Tell us about your skill level using desktop and mobile applications<sup style="color:red">*</sup></label>
                    <textarea name="skill_level" id="skill_level" rows="4" class="form-control"></textarea>
                </div>

                <!-- Question 8 -->
                <div class="mb-3">
                    <label for="work_safety" class="form-label">8) How do you feel about work safety?<sup style="color:red">*</sup></label>
                    <textarea name="work_safety" id="work_safety" rows="4" class="form-control"></textarea>
                </div>

                <!-- Question 9 -->
                <div class="mb-3">
                    <label for="successful_driver" class="form-label">9) What would make you a successful delivery driver?<sup style="color:red">*</sup></label>
                    <textarea name="successful_driver" id="successful_driver" rows="4" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit Application</button>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#jobApplicationForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: "{{ route('driver.store') }}", // Update with your route
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Handle success, e.g., show a success message
                    alert('Application submitted successfully!');
                    $('#jobApplicationForm')[0].reset(); // Reset the form
                },
                error: function(xhr) {
                    // Handle validation errors
                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        for (var key in errors) {
                            $('#' + key + 'Error').text(errors[key][0]); // Show the first error message for each field
                        }
                    }
                }
            });
        });
    });
</script>