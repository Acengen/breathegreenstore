$(".faq__q").on("click", function() {
    $(this).next(".faq__a").collapse("toggle");
})

$(".faq__a").on("hide.bs.collapse", function() {
    $(this).prev(".faq__q").find(".faq-caret").removeClass("fa-caret-up").addClass("fa-caret-down");
})

$(".faq__a").on("show.bs.collapse", function() {
    $(this).prev(".faq__q").find(".faq-caret").removeClass("fa-caret-down").addClass("fa-caret-up");
})

function toggleDropdown(e) {
    const _d = $(e.target).closest('.dropdown'),
        _m = $('.dropdown-menu', _d);
    setTimeout(function() {
        const shouldOpen = e.type !== 'click' && _d.is(':hover');
        _m.toggleClass('show', shouldOpen);
        _d.toggleClass('show', shouldOpen);
        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
    }, e.type === 'mouseleave' ? 300 : 0);
}

$('body')
    .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
    .on('click', '.dropdown-menu a', toggleDropdown);

// contact form validation

var contactForm = $("#contact-form");

if (contactForm.length) {
    $(contactForm).validate({
        rules: {
            "cf-subject": "required",
            "cf-message": "required",
            "cf-email": {
                required: true,
                email: true
            },
            "cf-name": "required",
        },
        submitHandler: function() {
            var contactFormData = contactForm.serialize();
            $.ajax({
                url: contactForm.attr("action"),
                type: "POST",
                data: contactFormData
            })
        }
    })
}