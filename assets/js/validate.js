$(document).ready(function() {
    console.log("Validation script loaded!");

    // Function to validate a field
    function validateField(input) {
        let field = $(input);
        let value = field.val().trim();
        let errorSpan = $("#" + field.attr("name") + "Error");
        let fieldType = field.data("validation") || "";
        let minLength = field.data("min") || 0;
        let maxLength = field.data("max") || 9999;

        let errorMessage = "";

        // Required field validation
        if (fieldType.includes("required") && value === "") {
            errorMessage = "This field is required.";
        }
        // Email validation
        else if (fieldType.includes("email") && !/^\S+@\S+\.\S+$/.test(value)) {
            errorMessage = "Please enter a valid email address.";
        }
        // Strong password validation
        else if (fieldType.includes("strongPassword") && !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).{8,}$/.test(value)) {
            errorMessage = "Password must be at least 8 characters long, including uppercase and lowercase letters, a number, and a special character.";
        }
        // Confirm password validation
        else if (fieldType.includes("confirmPassword")) {
            let password = $("#" + field.data("password-id")).val().trim();
            if (value !== password) {
                errorMessage = "Passwords do not match.";
            }
        }
        // Terms and Conditions validation
        else if (fieldType.includes("terms") && !field.is(":checked")) {
            errorMessage = "You must agree to the terms and conditions.";
        }
        // Alphabetical validation
        else if (fieldType.includes("alpha") && !/^[A-Za-z ]+$/.test(value)) {
            errorMessage = "Only letters are allowed.";
        }
        // Alphanumeric validation for username
        else if (fieldType.includes("alphanumeric") && !/^[A-Za-z0-9]+$/.test(value)) {
            errorMessage = "Only letters and numbers are allowed.";
        }
        // Numeric validation
        else if (fieldType.includes("numeric") && !/^\d+$/.test(value)) {
            errorMessage = "Only numbers are allowed.";
        }
        // Min length validation
        else if (fieldType.includes("min") && value.length < minLength) {
            errorMessage = `Must be at least ${minLength} characters.`;
        }
        // Max length validation
        else if (fieldType.includes("max") && value.length > maxLength) {
            errorMessage = `Must be no more than ${maxLength} characters.`;
        }
        // File upload validation
        else if (fieldType.includes("file")) {
            if (field[0].files.length === 0) {
                errorMessage = "Please upload a profile picture.";
            } else {
                let file = field[0].files[0];
                if (!/\.(jpg|jpeg|png)$/i.test(file.name)) {
                    errorMessage = "Only JPG, JPEG, and PNG files are allowed.";
                } else if (file.size > 200000) {
                    errorMessage = "File size must be less than 200KB.";
                }
            }
        }
        // Payment method validation
        else if (fieldType.includes("paymentMethod") && value === "") {
            errorMessage = "Please select a payment method.";
        }

        // Show or Clear error message
        if (errorMessage) {
            errorSpan.text(errorMessage).show();
            field.addClass("is-invalid").removeClass("is-valid");
        } else {
            errorSpan.text("").hide();
            field.removeClass("is-invalid").addClass("is-valid");
        }
    }

    // Validate fields on blur (when the user leaves the field)
    $("input, textarea, select").on("blur", function() {
        validateField(this);
    });

    // Form submission validation
    $("form").on("submit", function(e) {
        let isValid = true;

        $(this).find("input, textarea, select").each(function() {
            validateField(this);
            if ($("#" + $(this).attr("name") + "Error").text() !== "") {
                isValid = false;
            }
        });

        if (!isValid) {
            console.log("Form validation failed!");
            e.preventDefault(); // Prevent form submission if validation fails
        }
    });
});