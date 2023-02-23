$(document).ready(function () {






    var lskalskaks = false;
    $('.dajd').on('change', function () {
        if ($(this).val() == 'yes') {
            $('ul.last-input').css('display', 'flex');
            $('#fieldset_step_1').removeClass('next');
            $('#fieldset_step_1').attr('data-checkup', 'done')
            lskalskaks = true;
        } else {
            $('#fieldset_step_1').attr('type', 'button');
            $('ul.last-input').css('display', 'none');
            $('#fieldset_step_1').addClass('next');
            lskalskaks = false;
        }
    });
    $('#fieldset_step_1').on('click',function(){
        console.log('cxzczxczxczcx');
        if($(this).data('checkup') == 'done'){
            lskalskaks = true;
        $('#kdjs').click();
        }
    })

    var current_fs, next_fs, previous_fs;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    $(".next").click(function () {
        let clickStep = $(this).data('step');
        if(clickStep == 'one'){
            let filders = $(`fieldset[data-step=${clickStep}]`).find('.form-select')
            if(filders.val() == ''){
                $(filders).css('border-color', 'red')
                return;
            }else{
                
                $('.full-page').addClass('col-8');
                    $('.full-page').removeClass('col-12');
                    $('.small-box-right').css('display', 'block');
            }
        }else if(clickStep == 'two'){
            let filders = $(`fieldset[data-step=${clickStep}]`).find('.form-select')
            let filders2 = $(`fieldset[data-step=${clickStep}]`).find('.forsingleiteskjs')
            if(filders.val() == ''){
                $(filders).css('border-color', 'red')
                return;
            }
            let mnciwn = false;
            $(filders2).each(function(){
                if($(this).find('.counum').val() != 0){
                    mnciwn = true
                }
            })
            if(mnciwn == false){
                $(filders2).css('border-color', 'red')
                return;
            }else{
                $('.step2-child-box.mandatory').each(function(){
                    $(this).find('.counum_checkbox').click();
                })
            }
        }else if(clickStep == 'five'){
            let mnciwn = true;
            let filders = $(`fieldset[data-step=${clickStep}]`).find('.forminator-input[data-required=1]')
            filders.each(function(){
                if($(this).val() == ''){
                    $(filders).css('border-color', 'red')
                    mnciwn = false
                }
            })
            if(mnciwn == false){
                return;
            }
            $(`fieldset[data-step=${clickStep}]`).find('.forminator-button-submit').click();
        }

        if (lskalskaks == false) {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
        } else {
            console.log(lskalskaks);
            $('#kdjs').click();
        }


    });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
    });



    $(".submit").click(function () {
        return false;
    })
    $('.plus').on('click', function () {
        const myosdios = $(this).siblings('.counter-number').find('.counum').data('backet_id');
        $(this).parent().parent().parent().parent().parent().parent().parent().find('.forsingleiteskjs').find('.onlyoneSelector').not(`.bcnxbcn_${myosdios}`).val(0)
        let i = $(this).siblings('.counter-number').find('.counum').val();
        $(this).siblings('.counter-number').find('.counum').val(Number(i) + 1);
        return jdkjsd($(this).siblings('.counter-number').find('.counum'));
    });

    $('.minus').on('click', function () {
        let i = $(this).siblings('.counter-number').find('.counum').val();
        if (i > 0) {
            $(this).siblings('.counter-number').find('.counum').val(Number(i) - 1);
            return jdkjsd($(this).siblings('.counter-number').find('.counum'));
        }
    });

    $('input.counum_checkbox').on('click', function () {
        if ($(this).is(':checked')) {
            return jdkjsd($(this));
        } else {
            $(`.basket-box .basket-box-append #basket_${$(this).data('backet_id')}`).remove();
        }
    });

    function jdkjsd(e) {

        if ($(`.basket-box .basket-box-append #basket_${e.data('backet_id')}`).length == 0) {
            if (e.data('parent') == 'desired-stand') {
                if ($(`.basket-box .basket-box-append .dynamic-basket.desired-stand`).length == 1) {
                    $(`.basket-box .basket-box-append .dynamic-basket.desired-stand`).remove();
                }
            }
            let sjkdcnudh = Number($('.basket-box .basket-box-append .dynamic-basket.desired-stand .total_quantity').text());
            $('.basket-box .basket-box-append').append(`
            <div id="basket_${e.data('backet_id')}" class="dynamic-basket ${e.data('parent')}">

            <p ><strong>${e.data('title')}</strong></p>
            <ul class="totalup">
                <li class="total_quantity">${e.val()}</li>
                <li class="ms-2 ">$<span class="total_amount">${e.data('amount')}</span></li>
                <li><span class="blue ">$<span class="main_amount" data-vat_tax="${e.data('vat_tax')}" data-main="${e.data('amount')}" data-amount_type="${e.data('amount_type')}">${e.data('amount_type') == 'sq_m'? e.data('amount') * (e.data('parent') == 'desired-stand' ? e.val() : sjkdcnudh) : e.data('amount')}</span></span></li>
            </ul>
            <ul class="totalup mt-2">
                <li class="amount_type">${e.data('amount_type') == 'sq_m' ? 'sq.m x '+ (e.data('parent') == 'desired-stand' ? e.val() : sjkdcnudh) : ''}</li>
                <li><span class="blue">${e.data('vat_tax') != 0 ? 'Excl. VAT' : ''} ${e.data('amount_type') == 'sq_m' ? '/ sq.m' : ''} </span></li>
                <!-- <li>$52.00</li> -->
            </ul>
        </div>
            `);
        } else {
            if (e.val() == 0) {
                $(`.basket-box .basket-box-append #basket_${e.data('backet_id')}`).remove();
            }
            let ksjdnc = $(`.basket-box .basket-box-append #basket_${e.data('backet_id')} .main_amount`);
            ksjdnc.text(Number(ksjdnc.data('main')) * Number(e.val()));
            $(`.basket-box .basket-box-append #basket_${e.data('backet_id')} .total_quantity`).text(e.val());
            if(ksjdnc.data('amount_type') == 'sq_m'){
                $(`.basket-box .basket-box-append #basket_${e.data('backet_id')} .amount_type`).text('sq.m x '+ e.val());
            }

            if(e.data('parent') == 'desired-stand'){
                let cxzczxcbg = Number($('.basket-box .basket-box-append .dynamic-basket.desired-stand .total_quantity').text());
                
                $(`.basket-box .basket-box-append .undefined`).each(function() {
                    if($(this).find('.main_amount').data('amount_type') == 'sq_m'){
                        $(this).find('.amount_type').text('sq.m x ' + cxzczxcbg);
                        $(this).find('.main_amount').text($(this).find('.total_amount').text() * cxzczxcbg);
                    }
                })

            }
            
        }

    }
    $('.basket-box .basket-box-append').on('DOMSubtreeModified', function () {
        let totalAmount = 0;
        let totalTax = 0;
        $('.basket-box .basket-box-append .main_amount').each(function () {
            totalAmount = totalAmount + Number($(this).text())
            totalTax = totalTax + Number($(this).text()) * Number($(this).data('vat_tax') / 100)
        })
        $('#MainPrice').text(totalAmount.toFixed(2));
        $('#VatTaxPrice').text(totalTax.toFixed(2));
    });
    


    $(".step-2-pre").on('click', function () {
        $('.full-page').addClass('col-12');
        $('.full-page').removeClass('col-8');
        $('.small-box-right').css('display', 'none');
        console.log('helooo');
    })

});






