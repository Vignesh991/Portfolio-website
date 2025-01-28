
(function($) { "use strict";

	$(document).ready(function(){"use strict";
		
		var progressPath = document.querySelector('.progress-wrap path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);	
		var offset = 50;
		var duration = 550;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.progress-wrap').addClass('active-progress');
			} else {
				jQuery('.progress-wrap').removeClass('active-progress');
			}
		});				
		jQuery('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	});
	
})(jQuery);

//whatsapp
$('.mindzchatmsgsend-button').on('click',function(){
    var message = $("#mindzchatinputcontrol").val();   
                   // JavaScript function to open URL in new window   
           window.open( "https://wa.me/+9786408689?text=Hi%27,%20like%20to%20chat%20with%20you" + message, target='_blank');  
   });
// year
   const d = new Date()
document.getElementById("demo").innerHTML = d.getFullYear();

//  Validation

// function validateForm() {
//     const name = document.getElementById("name").value;
//     const lname = document.getElementById("lname").value;
//     const email = document.getElementById("email").value;
//     const agree = document.getElementById("agree").checked;
//     const nameError = document.getElementById("name-error");
//     const lnameError = document.getElementById("lname-error");
//     const emailError = document.getElementById("email-error" );
//     const agreeError = document.getElementById("agree-error");

//     nameError.textContent = "";
//     lnameError.textContent="";
//     emailError.textContent = "";
//     agreeError.textContent = "";

//     let isValid = true;

//     if (name === "" || /\d/.test(name)) {
//         nameError.textContent =
//             "Please enter your name properly.";
//         isValid = false;
//     }
//     if(lname == ""){
//         lnameError.textContent = "Please enter the Sur name";
//         isValid = false;
//     }

//     if (email === "" || !email.includes("@")) {
//         emailError.textContent =
//             "Please enter a valid email address.";
//         isValid = false;
//     }

//     if (!agree) {
//         agreeError.textContent =
//             "Please Write few line about you";
//         isValid = false;
//     }
//     // return isValid;

// 	if(valid = true)
// 	{

// 	}
// }


// $(document).ready(function () {
// 	$("#submitButton").click(function (event) {
// 		event.preventDefault(); // Prevent default form submission

	

// 		$.ajax({
// 			type: "POST",
// 			url: 'ajax/mail.php',
// 			data: $("#formId").serialize(), // Serialize form data
// 			success: function (data) {
// 				alert("Form Submitted Successfully");
// 			},
// 			error: function (data) {
// 				alert("Error occurred while submitting the form");
// 			}
// 		});
// 	});
// });


// 

'use strict';
const contact = $("#contact");

contact.on('click', (function (e) {
    // alert("mindz");
    // button onsubmit validation //
    let name = $("#name").val();
    let email = $("#email").val();
    let number = $("#number").val();
    // let comments = $("#comments").val();
    // let about = $('#about').val();
    // let Subject = $("#Subject").val(); 

    // var subject ="Customer Enquiry For Creative Artz Institute";
    
    // var encodedMessage = encodeURIComponent(
    //     "" + subject + "\n" +
    //     "Name: " + name + "\n" +
    //     "Phone: " + number + "\n" +
    //     "Email: " + email + "\n" +
    //     "Subject: " + Subject + "\n" +
    //     "comments: " + comments
    // );
    var valid = true;
    
    if (name == 0) {
        $("#nameerr").show();
        valid = false;
    } else {
        $("#nameerr").hide();
    }
    if (!email.trim().includes('@') || email.trim().includes(',')) {
        $("#emailerr").show();
        valid = false;
    }else {
        $("#emailerr").hide()
    }
    if (number == '' || number.length < 6) { $("#numbererr").show(); valid = false; } else $("#numbererr").hide();
    if (! $('#checkbox')[0].checked){
        $("#checkboxerr").show();
        return false;
    }
    else {
        $("#checkboxerr").hide();
    }
    // // ajax url posting & getting form datas and captcha condions
    // var link;
    
    if (valid == true) {

        // if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        //     link = whatsapp://send?phone=${contact}&text=${encodedMessage};
        // } else { // Desktop device
        //     link = ` https://api.whatsapp.com/send?phone=918807514787&text=${encodedMessage}`;
        //     // https://api.whatsapp.com/send?phone=916369883523&text=${encodedMessage}
        // }
        // setTimeout(function() {
        //     window.location.reload();
        // },0);
        // window.open(link, '_blank');


        $(".thankyou-text").css("display", "block").html("Thank you! Your request was sent successfully! Our team will be in contact with you shortly");
        $.ajax({
                type: "POST",
                dataType: 'json',
                cache: false,
                url:'ajax/mail.php',
                data: $("#contactform").serialize(),
                success: function ($result) {
                    // alert("Settings has been updated successfully.");
                    if ($result == 1) {
                        $("#captcha_err").show();
                        e.preventDefault();
                        // alert("mail has been sent");
                        return false;
                    } else {
                        // alert("Settings has been updated successfully.");
                        // link = ` https://api.whatsapp.com/send?phone=918807514787&text=${encodedMessage}`;
                        // window.location.href = https://api.whatsapp.com/send?phone=918807514787&text=${encodedMessage}; // going on page
                        // location.reload(setTimeout(swal("Success"), 8000)); //same page reload on popup
                            setTimeout(function() {
                                window.location.reload();
                            },0);
                        return true;
                    }
                }
        });   
    e.preventDefault();
    }  
  
}));

// Mouse Hover Round//
$(function () {
    $('body').append('<span class="cs_cursor_lg"></span>');
    $('body').append('<span class="cs_cursor_sm"></span>');
    $('a, button').on('mouseenter', function () {
      $('.cs_cursor_lg').addClass('opacity-0');
      $('.cs_cursor_sm').addClass('opacity-0');
    });
    $('a, button').on('mouseleave', function () {
      $('.cs_cursor_lg').removeClass('opacity-0');
      $('.cs_cursor_sm').removeClass('opacity-0');
    });
  });
  function cursorMovingAnimation(event) {
    try {
      const timing = gsap.timeline({
        defaults: {
          x: event.clientX,
          y: event.clientY,
        },
      });

      timing
        .to('.cs_cursor_lg', {
          ease: 'power2.out',
        })
        .to(
          '.cs_cursor_sm',
          {
            ease: 'power2.out',
          },
          '-=0.4',
        );
    } catch (err) {
      console.log(err);
    }
  }
  document.addEventListener('mousemove', cursorMovingAnimation);


    //hamburger
    const logo = document.querySelector(".logo-img")
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");
    const nav = document.querySelector("nav");
    
    
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
      nav.classList.toggle("nav-active");
      logo.classList.toggle("xmark");
    });
  