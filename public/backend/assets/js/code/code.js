// $(function () {
//     $(document).on("click", "#delete", function (e) {
//         e.preventDefault();
//         var link = $(this).attr("href");

//         Swal.fire({
//             title: "Are you sure?",
//             text: "Delete This Data?",
//             icon: "warning",
//             showCancelButton: true,
//             confirmButtonColor: "#3085d6",
//             cancelButtonColor: "#d33",
//             confirmButtonText: "Yes, delete it!",
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 window.location.href = link;
//                 Swal.fire("Deleted!", "Your file has been deleted.", "success");
//             }
//         });
//     });
// });

$(function () {
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Are you sure?",
            text: "Delete This Data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("click", function (e) {
        if (e.target && e.target.classList.contains("xlsx_file")) {
            e.preventDefault();
            var link = window.location.href;

            Swal.fire({
                title: "Only Excel file allowed to import!",
                text: "Please choose .xlsx file",
                icon: "warning",
                showCancelButton: true,
                cancelButtonColor: "#d33",
            }).then(function () {
                window.location.href = link;
            });
        }
    });
});

const validateName = (firstName) => {
    $(document).ready(() => {
        const rules = {};
        const messages = {};

        rules[firstName] = {
            required: true,
        };

        messages[firstName] = {
            required: "Please Enter Name",
        };

        $("#myForm").validate({
            rules: rules,
            messages: messages,
            errorElement: "span",
            errorPlacement: (error, element) => {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: (element, errorClass, validClass) => {
                $(element).addClass("is-invalid");
            },
            unhighlight: (element, errorClass, validClass) => {
                $(element).removeClass("is-invalid");
            },
        });
    });
};

const valName_SecondName = (firstName, secondName) => {
    $(document).ready(() => {
        const rules = {};
        const messages = {};

        rules[firstName] = {
            required: true,
        };

        rules[secondName] = {
            required: true,
        };

        messages[firstName] = {
            required: "Please Enter Name",
        };

        messages[secondName] = {
            required: "Please Enter",
        };

        $("#myForm").validate({
            rules: rules,
            messages: messages,
            errorElement: "span",
            errorPlacement: (error, element) => {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: (element, errorClass, validClass) => {
                $(element).addClass("is-invalid");
            },
            unhighlight: (element, errorClass, validClass) => {
                $(element).removeClass("is-invalid");
            },
        });
    });
};

const validateName_Group = () => {
    $(document).ready(() => {
        $("#myForm").validate({
            rules: {
                name: {
                    required: true,
                },
                group_name: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Enter Name",
                },
                group_name: {
                    required: "Please Choose",
                },
            },
            errorElement: "span",
            errorPlacement: (error, element) => {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: (element, errorClass, validClass) => {
                $(element).addClass("is-invalid");
            },
            unhighlight: (element, errorClass, validClass) => {
                $(element).removeClass("is-invalid");
            },
        });
    });
};
