$(function() {

    var appendthis = ("<div class='modal-overlay js-modal-close'></div>");

    $('a[data-modal-id]').click(function(e) {
        e.preventDefault();
        $("#our-team").append(appendthis);
        $("body").append(appendthis);
        $(".modal-overlay").fadeTo(500, 0.7);
        //$(".js-modalbox").fadeIn(500);
        var modalBox = $(this).attr('data-modal-id');
        $('#' + modalBox).fadeIn($(this).data());
    });


    $(".js-modal-close, .modal-overlay").click(function() {
        $(".modal-box, .modal-overlay").fadeOut(500, function() {
            $(".modal-overlay").remove();
        });
    });

    $(window).resize(function() {
        $(".modal-box").css({
            "top": ($(window).height() - $(".modal-box").outerHeight()) / 2,
            "left": ($(window).width() - $(".modal-box").outerWidth()) / 2
        });
    });

    // show contact form, where there an error in the URL
    if (window.location.href.indexOf("error=true") >= 0) {
        $("#contact-popup").modal("show");
    }else if (window.location.href.indexOf("contact_us=true") >= 0) {
        $("#contact-popup").modal("show");
    }else if (window.location.href.indexOf("privacy_policy=true") >= 0) {
        $("#privacy-popup").modal("show");
    }

    setTimeout(function() {
    	$(".share-it-contact-us").css('min-height', $(".client-context").parent().height()); // this line cause the height expanded	
    }, 0);
    $(window).resize(function() {
    	$(".share-it-contact-us").css('min-height', $(".client-context").parent().height()); // this line cause the height expanded
    	// if ($(window).outerWidth() >= 767) {
    	// 	setTimeout(function() {
    	// 		$(".select-terms-data-content").syncHeight();
    	// 	}, 1000);
    	// }
    });

    //$("#navbarMenuIcon").on("focusout",function(){
    //	$(this).trigger("click");
    //});

    $(".disable-scroll").on("click", function() {
        $("body").css("overflow", "hidden");
    });
    $(".popup-cancel-button").on("click", function() {
        $("body").css("overflow", "auto");
    });
    $("li.dropdown").each(function() {
        $(this).mouseover(function(event) {
            $(this).find("a").first().click().parent().addClass("open");

        });
        //$("ul.dropdown-menu>li").each(function(){
        //	$(this).on("click",function(){
        //		$(this).parent().parent().css('visibility','visible');
        //});
        //});
        $("ul.dropdown-menu>li").each(function() {
            $(this).mouseout(function() {
                $(this).parent().parent().removeClass("open");
            }).click(function(event) {
                $("#navbarMenuIcon").click();

            });
        });
        $(".share-it-contact-us").css('min-height', $(".client-context").parent().height()); // this line cause the height expanded
    });

 //    if ($(window).outerWidth() >= 767) {
	//     $(".select-terms-data-content").syncHeight();
	// }
});

$.fn.syncHeight = function() {
	function sortHeight(a, b) {
		return $(a).height() - $(b).height();
	};
	var arr = $.makeArray(this);
	arr.sort(sortHeight);
	return this.css("min-height", ($(arr[arr.length-1]).height()));
};

$(function() {
    var $contactPopUpForm = $("#contact-popup").find("form");
    $contactPopUpForm.find("button[type='reset']").on("click",function(){
        // reset form that is not submitted
        $contactPopUpForm[0].reset();
        var $errorDivs = $contactPopUpForm.find("div.error");
        var $submittedFields = $contactPopUpForm.find("input[type='text'],input[type='file'],input[type='email'],textarea");
        // remove error divs
        if($errorDivs.length > 0){
            $errorDivs.each(function(){
                $(this).remove();
            });
        }
        // clear submitted field
        $submittedFields.each(function(){
            $(this).val("");
        });
    });

});
